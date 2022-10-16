<?php
require_once("secure.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiWorks Reports</title>
</head>

<body>
    <form action="reports.php" method="post">

        generate reports
        <br><br>

        <select name="report" id="report">
            <option value="orderedParts">ordered parts</option>
            <option value="repairJobStatus">repair job status</option>
            <option value="repairCosts">repair costs</option>
            <option value="repairHistory">repair history</option>
            <option value="partsOnHand">parts on hand</option>
        </select>


        <input type="submit" name="submit" value="Generate">

    </form>

    <?php
    if (isset($_REQUEST['submit'])) {
        //DB Credentials
        require_once("config.php");

        //fecth report type
        $report = $_REQUEST['report'];

        //CID 
        $connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Failed to connect to database");

        if ($report == "repairHistory") {

            $query = "SELECT jobcard.jobCard_id, jobcard.status, jobcard.computer_id FROM jobcard
            join computer on jobcard.computer_id=computer.computer_id";

            $result = mysqli_query($connection, $query) or die("Error! Could not display repair history");

            mysqli_close($connection);

            # generate report for repair history
            echo "<h3> Repair History </h3>";

            echo "<table border=solid 1px;>";

            while ($row = mysqli_fetch_array($result)) {

                echo "<ol>";

                while ($row = mysqli_fetch_array($result)) {

                    echo "<li><a href=\"jobCard.php?id={$row['computer_id']}\">{$row['brand']} {$row['model']} ({$row['computer_id']})</a></li>";
                }

                echo "</ol>";
            }

            echo "</table>";
        } else
    if ($report == "orderedParts") {

            require_once("config.php");
            //CID 
            $connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Failed to connect to database");

            $query = "SELECT technician.full_name,hardware.hardware_name 
            from technician join hardware on technician.technician_id=hardware.technician_id";

            $result = mysqli_query($connection, $query) or die("Error! Could not display customers");
            //table start
            echo "<h3> Ordered Parts </h3>";
            echo "<table border=solid 1 px;><tr><td>Hardware Ordered</td><td>Technician Responsible:</td></tr>";

            //populate with DB data
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><a href=''>{$row['hardware_name']}</a></td>";
                echo "<td>{$row['full_name']}</td>";
                echo "</tr>";
            }
            //end table 
            echo "</table>";
            //close DB connection


        } elseif ($report == "repairCosts") {
            //query issue
            $query = "SELECT technician.labour_rate*techjob.hours_worked as total_labour, techjob.jobCard_id, hardware.price, technician.full_name
             FROM techjob inner join technician on techjob.technician_id=technician.technician_id
             inner join hardware on techjob.technician_id=hardware.technician_id";



            $result = mysqli_query($connection, $query) or die("Error! Could not display customers");
            //start table
            # generate report for repair costs
            echo "<h3> Repair Costs </h3>";

            echo "<table border=solid 1px; ><tr><td>Job Card ID</td><td>Price</td><td>Total Labour cost:</td><td>Technician:</td></tr>";

            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>";
                echo "<td>{$row['jobCard_id']}</td>";
                echo "<td>{$row['price']}</td>";
                echo "<td>{$row['total_labour']}</td>";
                echo "<td>{$row['full_name']}</td>";

                echo "</tr>";
            }

            echo "</table>";
        } elseif ($report == "repairJobStatus") {

            $query = "SELECT jobcard.jobCard_id, jobcard.status, jobcard.customer_id from jobcard
            inner join customers on jobcard.customer_id=customers.customer_id";

            $result = mysqli_query($connection, $query) or die("Error! Could not diplay repair Job Status");

            //table start
            # generate report for repair job status
            echo "<h3> Repair Job Status </h3>";
            echo "<table border=solid 1px;> <tr><td>jobCard_id</td><td>status</><td>customer_id</td></tr>";


            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>";
                echo "<td>{$row['jobCard_id']}</td>";
                echo "<td>{$row['status']}</td>";
                echo "<td>{$row['customer_id']}</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            # generate report for partsOnHand

            $query = "SELECT hardware_name, quantity_on_hand, quantity_on_hand*price AS total_price  FROM hardware";

            $result = mysqli_query($connection, $query) or die("Error! Could not display Parts on Hand ");

            mysqli_close($connection);

            # generate report for parts on hand
            echo "<h3> Parts on Hand </h3>";
            echo "<table border=solid 1px;>
            <tr><td>Hardware Name</td>
            <td>Quantity on Hand</td>
            <td>Total Price</td></tr>";

            while ($row = mysqli_fetch_array($result)) {

                echo "<tr>";
                echo "<td><a href = \"delete.php?id={$row['serial_number']}\" style= \"color: blue;\" onClick=\"return confirm('Are you sure you want to delete: \")\">Delete</a></td></tr>";
                echo  "<td>{$row['quantity_on_hand']}</td> ";
                echo "<td>R{$row['total_price']}</td></tr>";
                echo "</tr>";
            }
            //end table
            echo "</table>";
            //close the DB connection

        }
    }
    ?>
</body>

</html>
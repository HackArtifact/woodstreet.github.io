<?php
require_once("config.php");

$comp_ID = $_REQUEST['id'];



//CID 
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Failed to connect to database");


$query = "SELECT * FROM jobCard WHERE computer_id = $comp_ID";

$result = mysqli_query($connection, $query) or die("Error! Could not display job card");

mysqli_close($connection);



//output the job card(s)
echo "<h3>{$row['brand']} {$row['model']} repair history</h3>";

while ($row = mysqli_fetch_array($result)) {

    echo "Repair Job status: {$row['status']}";
    echo "<br>";
    echo "Problem description: {$row['description']}";
    echo "<br>";
}
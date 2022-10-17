<?php
require_once("config.php");
#if user is logged in start session 
session_start();

//check if the user is logged in
if (isset($_SESSION['access']) && $_SESSION['access'] == "yes") {
    //if the user is logged in, display the profile page

} else {
    //if the user is not logged in, redirect to login page
    header("Location:login.html");
}

//call on database login credentials


//connect to database
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("<p style=\"color:red\">Error! Could not connect to database.</p>");
if(isset($_SESSION['admin'])){
    $query = "SELECT technician_id as customer_id ,  SUBSTRING_INDEX(full_name, \" \", 1) as firstName, SUBSTRING_INDEX(full_name, \" \", -1) as lastName, email, password, labour_rate, admin, job_title FROM technician WHERE technician_id = '" . $_SESSION['id']. "'";
}else{
    $query = "SELECT * FROM customers WHERE customer_id = '" . $_SESSION['id'] . "'";
}
$results = mysqli_query($connection, $query) or die("<p style=\"color:red\">Error! Could not update customer details.</p>".mysqli_error($connection));

$row = mysqli_fetch_array($results);

// mysqli_close($connection);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="Profile.css" />
    <link rel="stylesheet" href="header-footer\header.css" />
    <link rel="stylesheet" href="header-footer\footer.css" />
    <link rel="stylesheet" href="header-footer\scroll.css" />
    <link rel="stylesheet" href="header-footer\screen.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
</head>

<!-- JS for constant header/footer -->
<script src="./header-footer/static-content.js"></script>
<script src="./radioCheck.js"></script>

<!-- body with dark scroller -->

<body style="overflow-x: hidden;" dark-scroll="">
    <!-- Base layout -->
    <div class="container-center-horizontal">
        <!-- Screen Size -->
        <div class="main-screen screen">
            <!-- Constant header -->
            <?php
            //check if the user is logged in
            if (isset($_SESSION['access']) && $_SESSION['access'] == "yes") {
                //if the user is logged in, display the bookings page
                if(isset($_SESSION['admin'])){
                    include 'header-footer/admin.php';
                }
                else{
                    include 'header-footer/client.php';
                }

            } else {
                //if the user is not logged in, redirect to login page
                include 'header-footer/initial.php';
            }
            ?>

            <div class="ellipse-1"></div>
            <div class="ellipse-2"></div>

            <img class="ellipse-3" src="images\Ellipse.png">
            <img class="ellipse-4" src="images\Ellipse.png">
            <img class="ellipse-5" src="images\Ellipse.png">
            <img class="ellipse-6" src="images\Ellipse.png">

            <img class="x-1" src="images\plus.png">
            <img class="x-2" src="images\plus.png">
            <img class="x-3" src="images\plus.png">

            <div class="booking-title">
                <h1 class="page-title">
                    Hey, <?php echo $row['firstName']; ?>
                </h1>
                <p class="page-subtitle">
                    Track the progress of your<br>orders...
                </p>
            </div>
            <a href="logout.php">
                <div class="log">
                    <button type="submit" class="buttonLog" name="log" id="log">LOGOUT</button>
                </div>
            </a>
            <form action="Updating.php" method="post">
                <div class="order-page">
                    <div class="top-part">
                        <img class="top-order" src="images\top-booking.svg" alt="top-order">

                        <div class="radio-me roboto-medium-black-18px">
                            Your Details
                        </div>

                        <input type="radio" class="radio-other" id="Other" name="name" onclick="allows()">
                        <div class="Other">EDIT</div>

                        <div class="first-name roboto-medium-black-18px">
                            <label for="first-name">First Name</label>
                        </div>
                        <input type="text" class="first-name-input" id="first-name" name="first-name"
                            value="<?php echo $row['firstName']; ?>" required disabled>

                        <div class="last-name roboto-medium-black-18px">
                            <label for="last-name">Last Name</label>
                        </div>
                        <input type="text" class="last-name-input" id="last-name" name="last-name"
                            value="<?php echo $row['lastName']; ?>" required disabled>

                        <div class="number roboto-medium-black-18px">
                            <label for="studNum">Staff/Student Number</label>
                        </div>
                        <input type="text" class="number-input" id="studNum" name="studNumber"
                            value="<?php echo $row['customer_id']; ?>" required disabled>

                        <div class="email roboto-medium-black-18px">
                            <label for="mail">Email</label>
                        </div>
                        <input type="email" class="email-input" id="mail" name="mail"
                            value="<?php echo $row['email']; ?>" required disabled>

                        <div class="phone roboto-medium-black-18px">
                            <label for="phone">Phone Number</label>
                        </div>
                        <input type="tel" class="phone-input" id="phone" name="phone"
                            value="<?php  if(isset($row['cell'])){ echo $row['cell'];} ?>" required disabled>
                        <input type="submit" class="button" name="logSubmit" id="logSubmit" value="EDIT">
                        <input type="hidden" name="studNum" value="<?php echo $_SESSION['id']; ?>">
                    </div>
                </div>


            </form>
            <script>
            function allows() {
                document.getElementById("first-name").disabled = false;
                document.getElementById("last-name").disabled = false;
                document.getElementById("mail").disabled = false;
                document.getElementById("phone").disabled = false;
            }
            </script>
            <div class="tracking">
                <div class="bg-colour"></div>
                <div class="status">
                    <form>
                        <div class="status-bg">
                            <div class="status-title">
                                Status:
                            </div>

                            <input type="radio" class="radio-order" id="r-order" name="name" value="1">
                            <div class="ordered roboto-medium-black-18px">
                                Order Recieved
                            </div>

                            <input type="radio" class="radio-tech" id="r-tech" name="name" value="2">
                            <div class="tech-ass roboto-medium-black-18px">
                                Technician Assigned
                            </div>

                            <input type="radio" class="radio-parts" id="r-parts" name="name" value="3">
                            <div class="p-order roboto-medium-black-18px">
                                Parts Ordered
                            </div>

                            <input type="radio" class="radio-progress" id="r-prog" name="name" value="4">
                            <div class="in-progress roboto-medium-black-18px">
                                Repair In Progress
                            </div>

                            <input type="radio" class="radio-invoice" id="r-invoice" name="name" value="5">
                            <div class="invoice roboto-medium-black-18px">
                                Invoice Sent
                            </div>

                            <input type="radio" class="radio-collect" id="r-collect" name="name" value="6">
                            <div class="expected-delivery roboto-medium-black-18px">
                                Collect
                            </div>

                            <div class="message-technician roboto-medium-black-18px">
                                Message Technician
                            </div>
                            <textarea class="tech-msg" placeholder="Write your message here..."></textarea>

                            <button type="submit" class="buttonTech" name="msgSubmit" id="msgSubmit">SEND</button>
                        </div>
                    </form>
                    <div class="information">
                        <div class="info-bg"></div>
                        <div class="info-title">
                            Device Information:
                        </div>
                    </div>
                    <div class="history">
                        <div class="history-bg"></div>
                        <div class="history-title">
                            History:
                        </div>
                    </div>
                </div>
            </div>

            <plain-footer></plain-footer>
        </div>
    </div>
</body>

</html>
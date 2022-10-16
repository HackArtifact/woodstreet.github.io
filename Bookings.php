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
    <title>Bookings</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="Bookings.css" />
    <link rel="stylesheet" href="header-footer\header.css" />
    <link rel="stylesheet" href="header-footer\footer.css" />
    <link rel="stylesheet" href="header-footer\scroll.css" />
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
                    Bookings
                </h1>
                <p class="page-subtitle">
                    What problem do you have... we'll make a plan
                </p>
            </div>
            <form action="book.php" method="post">
                <div class="detail-part">
                    <div class="detail-the-device-problem">
                        <label for="problem-input">Detail the device problem</label>
                    </div>
                    <input type="text" class="write-your-message" id="problem-input"
                        placeholder="Enter your problem here...">
                </div>

                <div class="order-page">
                    <div class="top-part">
                        <img class="top-order" src="images\top-booking.svg" alt="top-order">

                        <div class="order-title roboto-medium-black-18px">
                            Who is the order for?
                        </div>


                        <div id="bookerDetails">
                            <!-- if statements for when the other radio button is selected-->
                            <input type="radio" class="radio-me" id="Me" name="<?php echo $_SESSION['id']?>" onclick="dis()"></input>
                            <div class="Me">Me</div>
                            <input type="radio" class="radio-other" id="Other" name="name" onclick="allows()"></input>
                            <div class="Other">Other</div>

                            <div class="first-name roboto-medium-black-18px">
                                <label for="first-name">First Name</label>
                            </div>
                            <input type="text" class="first-name-input" id="first-name" name="first-name"
                                value="<?php echo $row['firstName']; ?>" disabled required>

                            <div class="last-name roboto-medium-black-18px">
                                <label for="last-name">Last Name</label>
                            </div>
                            <input type="text" class="last-name-input" id="last-name" name="last-name"
                                value="<?php echo $row['lastName']; ?>" disabled required>

                            <div class="number roboto-medium-black-18px">
                                <label for="studNum">Staff/Student Number</label>
                            </div>
                            <input type="text" class="number-input" id="studNum" name="studNum"
                                value="<?php echo $_SESSION['id']; ?>" disabled required>

                            <div class="email roboto-medium-black-18px">
                                <label for="mail">Email</label>
                            </div>
                            <input type="email" class="email-input" id="mail" name="mail" value="<?php echo $_SESSION['email']; ?>"
                                disabled required>

                            <script>
                            function allows() {
                                document.getElementById("first-name").disabled = false;
                                document.getElementById("last-name").disabled = false;
                                document.getElementById("studNum").disabled = false;
                                document.getElementById("mail").disabled = false;
                            }

                            function dis() {
                                document.getElementById("first-name").disabled = true;
                                document.getElementById("last-name").disabled = true;
                                document.getElementById("studNum").disabled = true;
                                document.getElementById("mail").disabled = true;
                            }
                            </script>
                        </div>


                        <div class="device-brand roboto-medium-black-18px">
                            <label for="dev-brand">Device Brand</label>
                        </div>
                        <!-- <input type="text" class="brand-input" id="dev-brand" placeholder="Enter your device brand here..."> -->
                        <select class="brand-input" name="dev-brand" id="dev-brand">
                            <option value="apple">Apple</option>
                            <option value="acer">Acer</option>
                            <option value="asus">Asus</option>
                            <option value="dell">Dell</option>
                            <option value="lenovo">Lenovo</option>
                            <option value="toshiba">Toshiba</option>
                            <option value="samsung">Samsung</option>
                            <option value="lg">LG</option>
                            <option value="microsoft">Microsoft</option>
                            <option value="msi">MSI</option>
                            <option value="sony">Sony</option>
                            <option value="other">Other</option>
                        </select>

                        <div class="device-model roboto-medium-black-18px">
                            <label for="dev-model">Device Model</label>
                        </div>
                        <input type="text" class="model-input" id="dev-model" name="dev-model"
                            placeholder="Enter your device model here..." required>

                        <div class="device-colour roboto-medium-black-18px">
                            <label for="dev-colour">Date</label>
                        </div>
                        <input type="date" class="colour-input" id="dev-colour" name="dev-colour" placeholder="Enter colour here..."
                            required>

                    </div>
                </div>
                <!-- Make the calendar have buttons for days when making a booking -->

                <div class="calendar-box">
                    <div class="calendar">
                        <div class="month">
                            <i class="fas fa-angle-left prev"></i>
                            <div class="date">
                                <h1></h1>
                                <p></p>
                            </div>
                            <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="days"></div>
                    </div>
                    <script src="./calendar.js"></script>
                </div>

                <button type="submit" class="button" name="logSubmit" id="logSubmit">SUBMIT</button>
            </form>
            </form>

            <plain-footer></plain-footer>
        </div>
    </div>
</body>

</html>
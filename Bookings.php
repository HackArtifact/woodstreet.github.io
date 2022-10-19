<?php

    #if user is logged in start session 
    session_start();

    //check if the user is logged in

    include("login/connection.php");
    include("login/functions.php");

    $user_data = check_login($con);

    //if user has submitted the form
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $radio = $_POST['name'];
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $date = $_POST['date'];
        $problem = $_POST['problem'];

        if($radio == "me" || empty($radio)){
            $user_id = $user_data['id'];
            $firstName = $user_data['firstName'];
            $lastName = $user_data['lastName'];
            $stNum = $user_data['stNum'];
            $email = $user_data['email'];

            $query = "INSERT INTO bookinglog (user_id, radio, firstName, lastName, stNum, email, brand, model, date, problem) 
            VALUES ($user_id, 'me', '$firstName', '$lastName', '$stNum', '$email', '$brand', '$model', '$date', '$problem')";
            mysqli_query($con, $query);

            echo "<script type='text/javascript'>alert('Booking has been made!');
                window.location='Profile.php';
                    </script>";
        }else{
            $email = $_POST['email'];

            $query = "SELECT * FROM customerlog WHERE email = '$email'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);

            $user_id = $row['id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $stNum = $row['stNum'];
            $email = $row['email'];

            $query = "INSERT INTO bookinglog (user_id, radio, firstName, lastName, stNum, email, brand, model, date, problem)
            VALUES ($user_id, 'other', '$firstName', '$lastName', '$stNum', '$email', '$brand', '$model', '$date', '$problem')";
            mysqli_query($con, $query);

                 echo "<script type='text/javascript'>alert('An email has been sent, please confirm booking!');
                    window.location='Bookings.php';
                    </script>";
                    die;
        }
        
    }
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
            
            if($user_data['email'] === 'g19f7591@campus.ru.ac.za'){
                include 'header-footer/admin.php';
            }else{
                include 'header-footer/client.php';
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
            <form action="Bookings.php" method="post">
                <div class="detail-part">
                    <div class="detail-the-device-problem">
                        <label for="problem-input">Detail the device problem</label>
                    </div>
                    <input type="text" class="write-your-message" id="problem-input" name="problem"
                        placeholder="Enter your problem here..." required>
                </div>

                <div class="order-page">
                    <div class="top-part">
                        <img class="top-order" src="images\top-booking.svg" alt="top-order">

                        <div class="order-title roboto-medium-black-18px">
                            Who is the order for?
                        </div>


                        <div id="bookerDetails">
                            <!-- if statements for when the other radio button is selected-->
                            <input type="radio" class="radio-me" id="Me" name="name" value="me" onclick="dis()"></input>
                            <div class="Me">Me</div>
                            <input type="radio" class="radio-other" id="Other" name="name" value="other" onclick="allows()"></input>
                            <div class="Other">Other</div>

                            <div class="first-name roboto-medium-black-18px">
                                <label for="firstName">First Name</label>
                            </div>
                            <input type="text" class="first-name-input" id="firstName" name="firstName"
                                value="<?php echo $user_data['firstName']; ?>" disabled required>

                            <div class="last-name roboto-medium-black-18px">
                                <label for="lastName">Last Name</label>
                            </div>
                            <input type="text" class="last-name-input" id="lastName" name="lastName"
                                value="<?php echo $user_data['lastName']; ?>" disabled required>

                            <div class="number roboto-medium-black-18px">
                                <label for="stNum">Staff/Student Number</label>
                            </div>
                            <input type="text" class="number-input" id="stNum" name="stNum"
                                value="<?php echo $user_data['stNum']; ?>" disabled required>

                            <div class="email roboto-medium-black-18px">
                                <label for="email">email</label>
                            </div>
                            <input type="email" class="email-input" id="email" name="email" value="<?php echo $user_data['email']; ?>"
                                disabled required>

                            <script>
                            function allows() {
                                document.getElementById("firstName").disabled = false;
                                document.getElementById("lastName").disabled = false;
                                document.getElementById("stNum").disabled = false;
                                document.getElementById("email").disabled = false;
                            }

                            function dis() {
                                document.getElementById("firstName").disabled = true;
                                document.getElementById("lastName").disabled = true;
                                document.getElementById("stNum").disabled = true;
                                document.getElementById("email").disabled = true;
                            }
                            </script>
                        </div>


                        <div class="device-brand roboto-medium-black-18px">
                            <label for="brand">Device Brand</label>
                        </div>
                        <!-- <input type="text" class="brand-input" id="brand" placeholder="Enter your device brand here..."> -->
                        <select class="brand-input" name="brand" id="brand">
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
                            <label for="model">Device Model</label>
                        </div>
                        <input type="text" class="model-input" id="model" name="model"
                            placeholder="Enter your device model here..." required>

                        <div class="device-colour roboto-medium-black-18px">
                            <label for="date">Date</label>
                        </div>
                        <input type="date" class="colour-input" id="date" name="date" placeholder="Enter colour here..."
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
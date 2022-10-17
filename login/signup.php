<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phone = $_POST['phone'];
        $stNum = $_POST['stNum'];

        if(!empty($email) && !empty($password) && !empty($firstName) && !is_numeric($firstName) && !empty($lastName) && !is_numeric($lastName) && !empty($phone))
        {
            //insert into database
            $user_id = random_num(20);
            $query = "insert into customerlog (user_id, email, password, firstName, lastName, phone, stNum) values ('$user_id', '$email', '$password', '$firstName', '$lastName', '$phone', '$stNum')";
            mysqli_query($con, $query);
            //redirect
            header("Location: login.php");
            die;

        }else
        {
            echo "Please enter valid username or password!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="../header-footer\header.css" />
    <link rel="stylesheet" href="../header-footer\footer.css" />
    <link rel="stylesheet" href="../header-footer\footer.css" />
    <link rel="stylesheet" href="../header-footer\scroll.css" />
</head>

<!-- JS for constant header/footer -->
<script src="../header-footer/static-content.js"></script>

<!-- body with dark scroller -->

<body style="margin: 0px; background: rgb(255, 255, 255); overflow-x: hidden;" dark-scroll="">

    <!-- Base layout -->
    <div class="container-center-horizontal">
        <!-- Screen Size -->
        <div class="main-screen screen">
            <!-- Contents boarder -->
            <div class="contents">
                <!-- Blue fade from top -->
                <div class="bg-fade"></div>

                <!-- Constant header -->
                <academy-header></academy-header>

                <!-- The INPUT frame -->
                <div class="contact-frame">
                    <!-- Frame background -->
                    <div class="contact-bg"></div>
                    <!-- Form for content being sent -->
                    <form action="signup.php" method="post" id="contactForm" name="contactForm">
                        <!-- Labels and inputs of names/email/number/password -->
                        <div class="title inter-medium-black-18px">
                            <h1>CREATE ACCOUNT</h1>
                        </div>
                        <div class="first-name inter-medium-black-18px">
                            <label for="firstName">First Name</label>
                        </div>
                        <input type="text" class="fname-line" id="fname" name="firstName" required>

                        <div class="last-name inter-medium-black-18px">
                            <label for="lastName">Last Name</label>
                        </div>
                        <input type="text" class="lname-line" id="lname" name="lastName" required>

                        <div class="mail inter-medium-black-18px">
                            <label for="email">Email</label>
                        </div>
                        <input type="text" class="mail-line" id="email" name="email" 
                         required>

                        <div class="message inter-medium-black-18px">
                            <label for="password">Password</label>
                        </div>
                        <input type="password" class="message-line" id="password" name="password"
                            placeholder="Write your password..."
                            required>

                        <div class="phone inter-medium-black-18px">
                            <label for="phone">Phone</label>
                        </div>
                        <input type="text" class="phone-line" id="phone" name="phone" required>
                        <div class="stNum inter-medium-black-18px">
                            <label for="stNum">Staff/Student Number</label>
                        </div>
                        <input type="text" class="stNum-line" id="stNum" name="stNum" placeholder="Optional">

                        <!-- Circles at bottom of form -->
                        <div class="ellipse-616"></div>
                        <div class="ellipse-617"></div>
                        <div class="ellipse-618"></div>
                        <div class="ellipse-623"></div>
                        <div class="ellipse-624"></div>
                        <div class="ellipse-619"></div>
                        <div class="ellipse-620"></div>
                        <div class="ellipse-627"></div>
                        <div class="ellipse-628"></div>
                        <div class="ellipse-625"></div>
                        <div class="ellipse-621"></div>
                        <div class="ellipse-622"></div>
                        <div class="ellipse-615"></div>
                        <div class="ellipse-626"></div>

                        <button type="submit" class="button" name="logSubmit" id="logSubmit">SUBMIT</button>

                    </form>
                </div>
                <!-- Constant footer -->
                <plain-footer></plain-footer>
            </div>
        </div>
    </div>
</body>

</html>
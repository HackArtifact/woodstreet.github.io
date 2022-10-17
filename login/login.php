<?php

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password))
    {

        //read from database
        $user_id = random_num(20);
        $query = "select * from customerlog  where email = '$email' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: ../Home.php");
                    die;
                }
            }
        }
        echo "Please enter valid email or password!";
    }else
    {
        echo "Please enter valid email or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="..\header-footer\header.css" />
    <link rel="stylesheet" href="..\header-footer\footer.css" />
    <link rel="stylesheet" href="..\header-footer\scroll.css" />
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
                    <form action="login.php" method="post" id="contactForm" name="contactForm">
                        <!-- Labels and inputs of email/password -->
                        <div class="login">
                            <h1 style="font-family:'Poppins', Helvetica;">LOGIN</h1>
                        </div>

                        <div class="mail inter-medium-black-18px">
                            <label for="email">email</label>
                        </div>
                        <input type="text" class="mail-line" id="email" name="email" placeholder="Write your email...">

                        <div class="password inter-medium-black-18px">
                            <label for="password">Password</label>
                        </div>
                        <input type="password" class="password-line" id="password" name="password"
                            placeholder="Write your password...">

                        <div class="forgot">
                            <a href="forgot.html" style="color: black; font-family:'Poppins', Helvetica;">Forgot Password?</a>
                        </div>

                        <div class="create">
                            <a href="signup.php" style="color: black; font-family:'Poppins', Helvetica;">Create Account</a>
                        </div>

                        <button type="submit" class="button" name="logSubmit" id="logSubmit">SUBMIT</button>

                    </form>

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
                </div>
                <!-- Constant footer -->
                <plain-footer></plain-footer>
            </div>
        </div>
    </div>
</body>

</html>
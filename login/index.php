<?php
    session_start();
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="header-footer\header.css" />
    <link rel="stylesheet" href="header-footer\footer.css" />
    <link rel="stylesheet" href="header-footer\scroll.css" />
</head>

<!-- JS for constant header/footer -->
<script src="./header-footer/static-content.js"></script>

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
                        <!-- Labels and inputs of email/password -->
                        <div class="login">
                            <h1 style="font-family:'Poppins', Helvetica;">Welcome <?php echo $user_data['user_name']; ?></h1>
                        </div>

                        <div class="forgot">
                            <a href="logout.php" style="color: black; font-family:'Poppins', Helvetica;">Logout</a>
                        </div>

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
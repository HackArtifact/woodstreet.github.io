<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="ContactUs.css" />
    <link rel="stylesheet" href="header-footer\header.css"/>
    <link rel="stylesheet" href="header-footer\footer.css"/>
    <link rel="stylesheet" href="header-footer\scroll.css"/>
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
                <?php
                #if user is logged in start session 
                session_start();

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
                
                <!-- The INPUT frame -->
                <div class="contact-frame">
                    <!-- Frame background -->
                    <div class="contact-bg"></div>
                    <!-- Form for content being sent -->
                    <form method="post" id="contactForm" name="contactForm">
                        <!-- Labels and inputs of names/email/number/message -->
                        <div class="first-name inter-medium-black-18px">
                            <label for="fname">First Name</label>
                        </div>
                        <input type="text" class="fname-line" id="fname" name="fname">

                        <div class="last-name inter-medium-black-18px">
                            <label for="lname">Last Name</label>
                        </div>
                        <input type="text" class="lname-line" id="lname" name="lname">

                        <div class="mail inter-medium-black-18px">
                            <label for="mail">E-mail</label>
                        </div>
                        <input type="text" class="mail-line" id="mail" name="mail">

                        <div class="message inter-medium-black-18px">
                            <label for="message">Message</label>
                        </div>
                        <input type="text" class="message-line" id="message" name="message" placeholder="Write your message...">

                        <div class="phone inter-medium-black-18px">
                            <label for="phone">Phone</label>
                        </div>
                        <input type="text" class="phone-line" id="phone" name="phone">

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="Location.css"/>
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

                <!-- 2 blue circles in background -->
                <div class="ellipse-1"></div>
                <div class="ellipse-2"></div>

                <!-- Image of map and 2 pins -->
                <img src="images\location-map.png" class="map" alt="map">
                <img src="images\location-pin.svg" class="pin-icon-1" alt="pin icon">
                <img src="images\location-pin.svg" class="pin-icon-2" alt="pin icon">

                <!-- Title/subtitle/address -->
                <h1 class="title">
                    We Are Here!
                </h1>
                <div class="sub-title">
                    Things we do in store
                </div>
                <div class="our-address">
                    Our address: <br>12 New Street, Makanda
                </div>

                <!-- First div = img-bg along with Title and text -->
                <!-- Repairs part -->
                <div class="repair-icon"></div>
                <img src="images\repairs.svg" class="repairs-img" alt="repairs img">
                <div class="repairs-desc">
                    <div class="repairs-title inter-semi-bold-black-18px">
                        Repairs
                    </div>
                    <div class="repairs-text inter-normal-black-18px">
                        Bring in your tech, we
                        can diagnose it, test it and repair it
                    </div>
                </div>
                <!-- Changes part -->
                <div class="changes-icon"></div>
                <img src="images\changes.svg" class="changes-img" alt="changes img">
                <div class="changes-desc">
                    <div class="changes-title inter-semi-bold-black-18px">
                        Changes
                    </div>
                    <div class="changes-text inter-normal-black-18px">
                        If you’re looking for
                        a specific part we can make the replacement or upgrade for you
                    </div>
                </div>
                <!-- Sales part -->
                <div class="sales-icon"></div>
                <img src="images\sales.svg" class="sales-img" alt="sales img">
                <div class="sales-desc">
                    <div class="sales-title inter-semi-bold-black-18px">
                        Sales
                    </div>
                    <div class="sales-text inter-normal-black-18px">
                        we have a host of
                        goods in store. Come take a look
                    </div>
                </div>
                
                <!-- Constant footer -->
                <plain-footer></plain-footer>
            </div>
        </div>
    </div>
</body>

</html>
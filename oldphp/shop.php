<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="Reports.css" />
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

            <div class="ellipse-1"></div>
            <div class="ellipse-2"></div>

            <img class="shop" src="images\shop.png">
            <img class="ellipse-4" src="images\Ellipse.png">
            <img class="ellipse-5" src="images\Ellipse.png">
            <img class="ellipse-6" src="images\Ellipse.png">

            <img class="x-1" src="images\plus.png">
            <img class="x-2" src="images\plus.png">
            <img class="x-3" src="images\plus.png">

            <div class="coming">SHOP COMING SOON!</div>

            <plain-footer></plain-footer>
        </div>
    </div>
</body>

</html>
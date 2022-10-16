<?php
#if user is logged in start session 
session_start();

//check if the user is logged in
if (isset($_SESSION['access']) && $_SESSION['access'] == "yes") {
    //if the user is logged in, display the profile page

} else {
    //if the user is not logged in, redirect to login page
    header("Location:login.html");
}
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
            include 'header-footer/admin.php'; //needs to check if admin
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
                    Hey, <?php echo $_SESSION['firstName']; ?>
                </h1>
                <p class="page-subtitle">
                    View the company details...
                </p>
            </div>
            <a href="logout.php">
                <div class="log">
                    <button type="submit" class="buttonLog" name="log" id="log">LOGOUT</button>
                </div>
            </a>

            <div class="selectedBtn">
            </div>
            <div class="unselectedMid">
                <div class="repair-job inter-bold-blue-violet-18px">
                    Repair Job
                </div>
            </div>
            <div class="unselected">
                <div class="repair-history inter-bold-blue-violet-18px">
                    Repair History
                </div>
            </div>

            <div class="tracking">
                <div class="bg-colour"></div>
                <div class="status">
                    <div class="hardware Tables">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Part Name</th>
                                    <th>Supplier</th>
                                    <th>Technician</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php include 'config.php';


                                echo "<tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>";
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <form>
                        <div class="status-bg">
                            <div class="repair"></div>
                            <div class="history"></div>
                            <div class="stock"></div>
                            <div class="orders"></div>
                            <div class=" stockBtn">
                                <div class="stockCount">
                                    Stock Count
                                </div>
                            </div>

                            <div class="partsBtn">
                                <div class="parts-ordered inter-bold-blue-violet-18px">
                                    Parts Ordered
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

            <plain-footer></plain-footer>
        </div>
    </div>
</body>
<script>

</script>

</html>
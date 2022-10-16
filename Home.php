
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <!-- Main Page/header/footer styles -->
    <link rel="stylesheet" href="HomePage.css" />
    <link rel="stylesheet" href="scrollAnimate.css" />
    <link rel="stylesheet" href="header-footer\header.css" />
    <link rel="stylesheet" href="header-footer\footer.css" />
    <link rel="stylesheet" href="header-footer\scroll.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<!-- JS for constant header/footer -->
<script src="./header-footer/static-content.js"></script>
<script defer src="./header-footer/scrollAnimate.js"></script>

<!-- body with dark scroller -->

<body style="margin: 0px; background: rgb(255, 255, 255); overflow-x: hidden;" dark-scroll="">

    <!-- Base layout -->
    <div class="container-center-horizontal">
        <!-- Screen Size -->
        <div class="main-screen screen ">
            <!-- Blue fade from top -->
            <img class="bg-fade" src="images\polygon.svg">

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
            
            <script type="text/javascript">
            const btn = document.querySelector("#btn");
            const btnText = document.querySelector("#btnText");

            btn.onclick = () => {
                if (btnText.innerHTML != "Log-out") {
                    btnText.innerHTML = "Log-out";
                    btn.classList.add("active");
                } else {
                    btnText.innerHTML = "Log-in";
                    btn.classList.remove("active");
                    btn.classList.add("inactive");
                }
            };
            </script>
            <!-- Floating dots and crosses -->
            <img class="ellipse-30" src="images\Ellipse.png">
            <img class="ellipse-31" src="images\Ellipse.png">
            <img class="x" src="images\plus.png">
            <img class="x-alt-0" src="images\plus.png">

            <!-- First paragraph -->
            <h1 class="title">
                The Wood Street Academy Vision:
            </h1>
            <div class="wood-street-academy">
                Wood Street Academy has the expertise to provide computer systems advice at an affordable price for
                students and staff.<br>After every device that has been fixed, we help the planet by keeping e-waste
                from entering the landfill
            </div>

            <!-- Contact Us button -->
            <div class="connect-us">
                <a href="ContactUs.html" style="color: #6854fc;">Connect With Us</a>
            </div>
            <!-- Booking button -->
            <a href="Bookings.php">
                <!-- CHECK IF LOGGED IN -->
                <button class="button">
                    <span class="make-booking">
                        MAKE A BOOKING
                    </span>
                </button>
            </a>

            <!-- First Picture on right -->
            <img class="landing-pic" src="images\Landing-desk.png">

            <!-- Why Us Title/Text/Image -->
            <img class="why-us-img hidden" src="images\Landing-whyus.png">
            <div class="why-us inter-bold-thunder-24px hidden">
                Why Us?
            </div>
            <p class="landing-desc inter-normal-gray-16px hidden">
                Wood Street Academy's workshop provides quick computer support with diagnostics and/or repairs for
                Windows or Mac Computers and Laptops.<br>Our friendly team of experts are ready to assist you with
                years of experience!
            </p>

            <!-- Vision Title/Text/Image -->
            <img class="vision-img hidden" src="images\Landing-vision.png">
            <div class="our-vision inter-bold-thunder-24px hidden">
                Our Vision
            </div>
            <p class="vision-desc inter-normal-gray-16px hidden">
                Wood Street Academy has the expertise to provide computer systems advice at an affordable price for
                students and staff.<br>
                We strive to provide you with the best in class repair service to avoid downtime on your
                equipment.<br>
                After every device that has been fixed, we help the planet by keeping e-waste from entering the
                landfill.
            </p>

            <!-- Who Are We Title/Text/Image -->
            <img class="we-are-img hidden" src="images\Landing-laptop.png" id="target" value="target">
            <div class="who-we-are inter-bold-thunder-24px hidden">
                <a id="target" value="target">Who We Are</a>
            </div>
            <p class="we-are-desc inter-normal-gray-16px hidden">
                Devices break, while wear and tear is normal. We have everything you need to fix your devices with
                quality replacement parts and skilled technisions to return your personal computer looking brand
                new.<br>
                We help a large amount of people with contrasting problems and are able to return 99% of the devices
                completely fixed.
            </p>

            <!-- Hint of blue across page -->
            <img class="diagonal-blue" src="images/diagonal-blue.svg">
            <!-- Blue line across page -->
            <div class="horizontal-colour hidden"></div>

            <!-- Review Section -->
            <!-- Review Title/Text/Image -->

            <div class="reviews hidden">
                Reviews
            </div>
            <div class="review-sub hidden">
                We make sure to leave you with a smile on your face and your computer working better than when you
                brought it in
            </div>
            <img class="review-img" src="images\Landing-customer.png">

            <!-- Peoples Reviews Name/Title/Text/Image -->
            <!-- Accountant block -->
            <div class="acc-review hidden">
                <img class="acc-img" src="images\Landing-accountant.png">
                <div class="acc-header">
                    <div class="accountant inter-semi-bold-black-20px">
                        Accountant
                    </div>
                    <div class="acc-name inter-normal-black-18px">
                        Cameron Williamson
                    </div>
                </div>
                <div class="acc-text inter-normal-black-18px-2">
                    Sed pretium, in et neque sed. Magna euismod ac, gravida accumsan. Viverra diam non sagittis
                    velit leo lectus diam velit congue. Sagittis, at id viverra enim euismod. Non leo commodo,
                    maecenas egestas pharetra.
                </div>
            </div>
            <!-- Lecturer block -->
            <div class="lec-review hidden">
                <img class="lec-img" src="images\Landing-lecturer.png">
                <div class="lec-header">
                    <div class="lec-title inter-semi-bold-black-20px">
                        Lecturer
                    </div>
                    <div class="lec-name inter-normal-black-18px">
                        Jenny Wilson
                    </div>
                </div>
                <div class="lec-text inter-normal-black-18px-2">
                    Helped me get back to uploading resources for my students as fast as possible.<br>
                    Best Service!<br>
                    The website is so easy to use with amazing customer support!
                </div>
            </div>
            <!-- Student block -->
            <div class="student-review hidden">
                <img class="student-img" src="images\Landing-student.png">
                <div class="student-header">
                    <div class="student-title inter-semi-bold-black-20px">
                        Student
                    </div>
                    <div class="student-name inter-normal-black-18px">
                        Darrell Steward
                    </div>
                </div>
                <div class="student-text inter-normal-black-18px-2">
                    Best Service!<br>
                    The website is so easy to use with amazing customer support!<br>
                    Couldn't be happier with the service.
                </div>
            </div>
            <!-- Teacher block -->
            <div class="teacher-review hidden">
                <img class="teacher-img" src="images\Landing-teacher.png">
                <div class="teacher-header">
                    <div class="teacher-title inter-semi-bold-black-20px">
                        Teacher
                    </div>
                    <div class="teacher-name inter-normal-black-18px">
                        Theresa Webb
                    </div>
                </div>
                <div class="teacher-text inter-normal-black-18px-2">
                    Never used such a simple website. Loved getting to know the team.
                </div>
            </div>
            <!-- Floating dots and crosses around page -->
            <img class="ellipse-25" src="images\Ellipse.png">
            <img class="ellipse-26" src="images\Ellipse.png">
            <img class="ellipse-27" src="images\Ellipse.png">
            <img class="x-alt-1" src="images\plus.png">
            <img class="x-alt-2" src="images\plus.png">
            <img class="x-alt-3" src="images\plus.png">
            <img class="ellipse-21" src="images\Ellipse.png">
            <img class="ellipse-23" src="images\Ellipse.png">
            <img class="ellipse-24" src="images\Ellipse.png">
            <img class="x-alt-4" src="images\plus.png">
            <img class="x-alt-5" src="images\plus.png">
            <img class="ellipse-28" src="images\Ellipse.png">
            <img class="ellipse-29" src="images\Ellipse.png">
            <img class="x-alt-6" src="images\plus.png">
            <img class="x-alt-7" src="images\plus.png">
            <img class="x-alt-8" src="images\plus.png">

            <!-- Constant footer -->
            <academy-footer></academy-footer>
        </div>
    </div>

</body>

</html>
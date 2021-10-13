<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./home.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <title>About</title>
</head>

<?php
if (!isset($_SESSION)) { // if session hasn't started yet, then start the session
    session_start();
}
?>

<body>
    <header>
        <div class="logo-container">
            <h4 class="logo">TabletPro</h4>
        </div>
        <nav>
            <ul class="navigation">
                <li><img class="nav-link" src="logo.jpg" height="30" width="30" style="vertical-align: middle;"></a></li>
                <li><a class="nav-link" href="home.php">Home</a></li>
                <li><a class="nav-link" href="about.php">About</a></li>
                <li><a class="nav-link" href="form.php">Contact us</a></li>
                <?php
                if (isset($_SESSION['username'])) {
                    $_SESSION['booking'] = "<li><a class='nav-link' href='booking.php'> Booking</a></li>";
                    echo $_SESSION['booking'];
                }
                ?>
            </ul>
        </nav>

        <div class="cart">
            <?php
            if (isset($_SESSION['username'])) {
                $_SESSION['logout'] = "<a class ='nav-link' href='logout.php'> Log Out </a>";
                echo $_SESSION['logout'];
            }

            ?>
        </div>


        <div class="drop_down_menu">
            <label for="toggle"> &#9776; </label>
            <input type="checkbox" class="checkbox" id="toggle">
            <div class="menu">
                <a href="home.php" class="top_menu"> Home</a>
                <a href="about.php">About</a>
                <a href="form.php">Contact us</a>
                <?php
                if (isset($_SESSION['username'])) {
                    $_SESSION['booking'] = "<a href='booking.php'> Booking</a>";
                    echo $_SESSION['booking'];
                }
                ?>

                <?php
                if (isset($_SESSION['username'])) {
                    $_SESSION['logout'] = "<a href='logout.php'> Log Out </a>";
                    echo $_SESSION['logout'];
                }
                ?>

            </div>
        </div>
    </header>
    <!--Main -->
    <main>
        <section class="outer_homepage">
            <section class="homepage">
                <div class="text_wrapper">
                    <div class="text">
                        <h1>About Tablet Pro</h1>
                        <p>The Tablet Pro is a thin portable device, with a new and upgraded C430 Chip which allows tasks to be processed faster then ever. We have
                            a sleek and minimalistic design. </p>
                        <p>
                            The dual-camera allows for clean shots to be taken.
                        </p>

                    </div>


                </div>
                <div class="image">
<!--*    Title: man reading touchscreen 
*    Author: Kaboompics
*    Date: 2021
*    Availability:https://pixabay.com/photos/man-reading-touchscreen-blog-791049/ -->

                    <img src="./about.jpg" alt="ipad">


                </div>
            </section>
        </section>
    </main>

    <!-- Footer Section -->
    <div class="footercontainer">
        <div class="footerlinks">
            <div class="footerlink--wrapper">
                <div class="footerlink--items">
                </div>
            </div>
        </div>
        <div class="socialmedia">
            <div class="socialmedia--wrap">
                <div class="socialicons">
                    <a href="/" class="socialicons--link" target="_blank">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <div class="footerlogo">
                            <a href="" id="footerlogo">
                                <p class="websitecopyright">Copyright © TabletPro </p>
                        </div>
                </div>
            </div>
        </div>
        <div class="disclaimer">
            <a>TabletPro is a fictitious brand solely created for the purpose of the assessment of IN1010 module at City, University of London, UK. All products and people associated with TabletPro are also fictitious. Any resemblance to real brands, products, or people is purely coincidental. Information provided about the product is also fictitious and should not be construed to be representative of actual products on the market in a similar product category.</a>
        </div>
    </div>

</body>

</html>
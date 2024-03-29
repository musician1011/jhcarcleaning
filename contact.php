<?php
if ($_GET['formSend'] !== null){
    $isSend = $_GET['formSend'];
    $page = $_SERVER['PHP_SELF'];
    $sec = "5";
    header("Refresh: $sec; url=$page");
}else {
    $isSend = false;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact - JH Carcleaning</title>
    <meta content="Welkom bij JH Carcleaning. Via deze pagina kan je contact met ons opnemen." name="description">
    <meta content="carcleaner, carwash, auto, schoonmaken, wassen, interieur, mobiel, wagenpark " name="keywords">
    <meta content="Willem Devriendt" name="author">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness - v4.3.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LR028BSVEG"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-LR028BSVEG');
</script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><span>JH</span> Car Cleaning</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <!--<li><a href="gallery.html">Foto's</a></li>-->
                    <li class="dropdown"><a href="#"><span>Onze Diensten</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="interieur.html">Interieur</a></li>
                            <li><a href="carrosserie.html">Carrosserie</a></li>
                            <li><a href="garages.html">Voor Garages</a></li>
                            <li><a href="particulier.html">Voor Particulieren</a></li>
                        </ul>
                    </li>
                    <li><a href="bedrijven.html">Voor Bedrijven</a></li>
                    <li><a href="milieu.html">Milieu</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->


    <main id="main">


        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container" style="padding:100px">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Start contact icon column -->
                            <div class="col-md-6">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="bi bi-phone"></i>
                                        <p>
                                            GSM:<a href="tel:+32 499 75 56" style="color:black"> +32 499 75 56<br></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start contact icon column -->
                            <div class="col-md-6">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="bi bi-envelope"></i>
                                        <p>
                                            Email:<a href="mailto:info@jh-carcleaning.be" style="color:black">
                                                info@jh-carcleaning.be<br></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <!-- Start Picture -->
                            <div class="col-md-6">
                                <div class="well-left">
                                    <div class="single-well">
                                        <a href="#">
                                            <img src="assets/img/new/tail-1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>


                            </div>

                            <!-- End Picture -->

                            <!-- Start  contact -->
                            <div class="col-md-6">
                                <div class="form contact-form">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Naam" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="message" rows="5" placeholder="Bericht" required></textarea>
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message" style="display: <?= $isSend? 'block': 'none' ?>">Uw bericht is verstuurd. Hartelijk dank!</div>
                                        </div>
                                        <div class="text-center"><button type="submit">Verstuur bericht</button></div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Left contact -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <!--<div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid">
                                </div>-->
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/JHProfessionalCarCleaning" target="blank"><i class="bi bi-facebook"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span><a href="tel:+32 499 75 66 77" style="color:black"> +32 499 75
                                            56 77</a></p>
                                    <p><span>Email:</span><a href="mailto:info@jh-carcleaning.be" style="color:black">
                                            info@jh-carcleaning.be</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>Photogenica</strong>. All Rights Reserved
                            </p>
                        </div>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
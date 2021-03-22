<?php

include './classes/Search.php';
$search_obj = new Search;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Search Restaurants</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Flattern - v2.2.1
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i><a href="2190494@ecccomp.com">2190494@ecccomp.com</a>
                <i class="icofont-phone"></i> +1 5589 55488 55
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="skype"><i class="icofont-skype"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.html">Gourmet</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <!-- <li><a href="about.html">About</a></li> -->
                    <li><a href="services.html">Services</a></li>
                    <!--<li><a href="pricing.html">Pricing</a></li>-->
                    <!--<li><a href="portfolio.html">Ranking</a></li>-->
                    <!--<li><a href="testimonials.html">Testimonials</a></li>-->
                    <!--<li class="active"><a href="blog.html">Blog</a></li>-->
                    <li class="drop-down" class="active"><a href="">Search</a>
                        <ul>
                            <li><a href="restaurant.php">Search Restaurantas</a></li>
                            <li><a href="cafe.php">Serch Cafes</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li class="drop-down"><a href="login-form-04/login-form-04/index.html">Login</a>
                        <ul>
                            <li><a href="login-form-04/login-form-04/index.php">Login</a></li>
                            <li><a href="signup-form-04/signup-form-04/index.php">Sign up</a></li>
                        </ul>
                    </li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Search Restaurants</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Search Restaurants</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <section id="blog" class="blog">

            <div class="container">

                <div class="row">
                    <div class="col-lg-11">

                        <div class="sidebar">
                            <!--<h3 class="sidebar-title">Search</h3>-->
                            <div class="sidebar-item search-form">
                                <form action="" method="POST" name="restsearch">
                                    <input type="text" name="name" placeholder="keyword">
                                    <button type="submit" name="search" value="search"><i class="icofont-search"></i></button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <?php


                if (isset($_POST['search'])) {
                    $name = $_POST['name'];
                    $address = $_POST['name'];
                    $genre = $_POST['name'];
                    $country = $_POST['name'];

                    $search_obj->restsearch($name, $address, $genre, $country);
                }

                ?>


                <h4>Popular Restaurants on Gourmet</h4><br>
                <div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Antique</h4>
                            <p>548-13 Tsukinokawa, Osaka</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Rouge</h4>
                            <p>377-18 Shiro, Tokyo</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>FIESTA</h4>
                            <p>898-13 Fukakusa, Tokyo</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Iris</h4>
                            <p>427-2 Jinkyu, Tokyo</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>BLOOM</h4>
                            <p>386-11 Omi, Osaka</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>cantabile</h4>
                            <p>548-5 Yoshikura, Osaka</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>maroon</h4>
                            <p>483-14 Sone, Tokyo</p>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Platinum</h4>
                            <p>104-1 Nonaka, Osaka</p>
                            <br>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Meteor</h4>
                            <p>554-4 Kaminogo, Tokyo</p>
                            <!--<a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery"
                                class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>

        </section>




    </main>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
<!DOCTYPE html>
<?php include "connectdb.php";?>


<?php
    $rrs=mysqli_query($con,"SELECT * FROM section_title Where id=1");
$rs = mysqli_fetch_array($rrs);
$test_title = "$rs[test_title]";
$test_text="$rs[test_text]";
$enquiry_title="$rs[enquiry_title]";
$enquiry_text="$rs[enquiry_text]";
$enquiry_text="$rs[enquiry_text]";
$contact_title="$rs[contact_title]";
$contact_text="$rs[contact_text]";
$port_title="$rs[port_title]";
$port_text="$rs[port_text]";
$service_title="$rs[service_title]";
$service_text="$rs[service_text]";
$product_title="$rs[product_title]";
$product_text="$rs[product_text]";
$about_title="$rs[about_title]";
$about_text="$rs[about_text]";
$honey_title="$rs[honey_title]";
$honey_text="$rs[honey_text]";
$nature_honey_title="$rs[nature_honey_title]";
$nature_honey_text="$rs[nature_honey_text]";
?>



<?php
    $rt=mysqli_query($con,"SELECT * FROM sitecontact where id=1");
    $tr = mysqli_fetch_array($rt);
    $phone1 = "$tr[phone1]";
    $phone2 = "$tr[phone2]";
    $email1 = "$tr[email1]";
    $email2 = "$tr[email2]";
    $longitude = "$tr[longitude]";
    $latitude = "$tr[latitude]";
?>
 <?php
    $rr=mysqli_query($con,"SELECT * FROM siteconfig where id=1");
    $r = mysqli_fetch_array($rr);
    $site_title = "$r[site_title]";
    $site_about = "$r[site_about]";
    $site_footer = "$r[site_footer]";
    $follow_text = "$r[follow_text]";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Checkout || Agrion || Agrion HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agrion HTML 5 Template ">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="../../css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="../../css2-1?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css">
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css">
    <link rel="stylesheet" href="assets/vendors/agrion-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css">
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css">
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css">
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/agrion.css">
    <link rel="stylesheet" href="assets/css/agrion-responsive.css">
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-header__wrapper">
                <div class="main-header__wrapper-inner">
                    <div class="main-header__logo">
                        <a href="index.html"><img src="assets/images/resources/logo-1.png" alt=""></a>
                    </div>
                    <div class="main-header__menu-box">
                        <div class="main-header__menu-box-top">
                            <ul class="list-unstyled main-header__contact-list">
                                <li>
                                    <div class="icon">
                                        <i class="icon-email"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>80 Broklyn Golden Street USA</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="main-header__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-header__menu-box-bottom">
                            <nav class="main-menu">
                                <div class="main-menu__wrapper">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-menu__left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="dropdown megamenu">
                                                        <a href="index.html">Home </a>
                                                        <ul>
                                                            <li>
                                                                <section class="home-showcase">
                                                                    <div class="container">
                                                                        <div class="home-showcase__inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-1.jpg" alt="">
                                                                                            <div class="home-showcase__buttons">
                                                                                                <a href="index.html" class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page</a>
                                                                                                <a href="index-one-page.html" class="thm-btn home-showcase__buttons__item">One
                                                                                                    Page</a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3 class="home-showcase__title">
                                                                                            Home
                                                                                            page
                                                                                            01</h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div><!-- /.home-showcase__item -->
                                                                                </div><!-- /.col-lg-3 -->
                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-2.jpg" alt="">
                                                                                            <div class="home-showcase__buttons">
                                                                                                <a href="index2.html" class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page</a>
                                                                                                <a href="index2-one-page.html" class="thm-btn home-showcase__buttons__item">One
                                                                                                    Page</a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3 class="home-showcase__title">
                                                                                            Home
                                                                                            page
                                                                                            02
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div><!-- /.home-showcase__item -->
                                                                                </div><!-- /.col-lg-3 -->
                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-3.jpg" alt="">
                                                                                            <div class="home-showcase__buttons">
                                                                                                <a href="index3.html" class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page</a>
                                                                                                <a href="index3-one-page.html" class="thm-btn home-showcase__buttons__item">One
                                                                                                    Page</a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3 class="home-showcase__title">
                                                                                            Home
                                                                                            page
                                                                                            03
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div><!-- /.home-showcase__item -->
                                                                                </div><!-- /.col-lg-3 -->
                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-4.jpg" alt="">
                                                                                            <div class="home-showcase__buttons">
                                                                                                <a href="index-dark.html" class="thm-btn home-showcase__buttons__item">View
                                                                                                    Page</a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3 class="home-showcase__title">
                                                                                            Home
                                                                                            page
                                                                                            04
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div><!-- /.home-showcase__item -->
                                                                                </div><!-- /.col-lg-3 -->
                                                                            </div><!-- /.row -->
                                                                        </div><!-- /.home-showcase__inner -->

                                                                    </div><!-- /.container -->
                                                                </section>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="about.html">About</a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Services</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="services.html">Services</a>
                                                            </li>
                                                            <li><a href="services-carousel.html">Services Carousel</a>
                                                            </li>
                                                            <li><a href="agriculture-products.html">Agriculture
                                                                    Products</a></li>
                                                            <li><a href="organic-products.html">Organic Products</a>
                                                            </li>
                                                            <li><a href="fresh-vegetables.html">Fresh Vegetables</a>
                                                            </li>
                                                            <li><a href="dairy-products.html">Dairy Products</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Projects</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="project-01.html">Projects 01</a></li>
                                                            <li><a href="project-02.html">Projects 02</a></li>
                                                            <li><a href="project-carousel.html">Project Carousel</a>
                                                            </li>
                                                            <li><a href="project-details.html">Project Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Pages</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="farmers.html">Farmers</a></li>
                                                            <li><a href="farmers-carousel.html">Farmers Carousel</a>
                                                            </li>
                                                            <li><a href="testimonials.html">Testimonials</a></li>
                                                            <li><a href="testimonials-carousel.html">Testimonial
                                                                    Carousel</a></li>
                                                            <li><a href="faq.html">FAQs</a></li>
                                                            <li><a href="404.html">404 Error</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#">Blog</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown current">
                                                        <a href="#">Shop</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="products.html">Products</a></li>
                                                            <li><a href="product-details.html">Product Details</a></li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-menu__right">
                                            <div class="main-menu__search-cart-btn-box">
                                                <div class="main-menu__search-box">
                                                    <a href="#" class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                                </div>
                                                <div class="main-menu__cart-box">
                                                    <a href="cart.html" class="main-menu__cart icon-shopping-cart"></a>
                                                </div>
                                                <div class="main-menu__btn-box">
                                                    <a href="contact.html" class="thm-btn main-menu__btn">Get Free Quote
                                                        <i class="icon-right-arrow"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="main-header__phone-contact-box">
                        <div class="main-header__phone-number">
                            <a href="tel:9200886823">+92 (0088) 6823</a>
                        </div>
                        <div class="main-header__call-box">
                            <div class="main-header__call-inner">
                                <div class="main-header__call-icon">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
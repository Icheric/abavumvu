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
    <title> <?php print $site_title ?></title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agrion HTML 5 Template ">
    <!-- fonts -->
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <div class="page-wrapper">
      <header class="main-header">
        <div class="main-header__wrapper">
          <div class="main-header__wrapper-inner">
            <div class="main-header__logo">
              <a href="index.html">
                <img src="assets/images/resources/logo-1.png" alt="">
              </a>
            </div>
            <div class="main-header__menu-box">
              <div class="main-header__menu-box-top">
                <ul class="list-unstyled main-header__contact-list">
                  <li>
                    <div class="icon">
                      <i class="icon-email"></i>
                    </div>
                    <div class="text">
                      <p>
                        <a href="mailto:needhelp@abavumvu.rw">needhelp@abavumvu.rw</a>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="icon">
                      <i class="icon-pin"></i>
                    </div>
                    <div class="text">
                      <p>Kacyiru KG 7 Ave, Kigali</p>
                    </div>
                  </li>
                </ul>
                <div class="main-header__social">
                  <a href="https://twitter.com/FAORwanda">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
              <div class="main-header__menu-box-bottom">
                <nav class="main-menu">
                  <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                      <div class="main-menu__left">
                        <div class="main-menu__main-menu-box">
                          <a href="#" class="mobile-nav__toggler">
                            <i class="fa fa-bars"></i>
                          </a>
                          <ul class="main-menu__list">
                            <li class="dropdown current megamenu">
                              <a href="home">Profile </a>
                            </li>
                            <li>
                              <a href="about">Product</a>
                            </li>
                           
                            
                              <li class="dropdown">
                              <a href="resources">Orders</a>
                            </li>
                           
                         
                          </ul>
                        </div>
                      </div>
                      <div class="main-menu__right">
                        <div class="main-menu__search-cart-btn-box">
                       
                   
                          <div class="main-menu__btn-box">
                            <a href="logout.php" class="thm-btn main-menu__btn">Logout<i class="fas fa-sign-out-alt"></i></a>
                            <!-- <a href="apply" class="thm-btn main-menu__btn">Apply Now<i class="icon-right-arrow"></i> -->
                            </a>
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
                <a href="tel:9200886823">+250 (1234) 6802</a>
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
<?php require_once('auth.php'); include 'header.php'?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
  <?php if(isset($_SESSION['msg']['success']) && !empty($_SESSION['msg']['success'])): ?>
      <div class="message-success">
        <?php 
          echo $_SESSION['msg']['success'];
          unset($_SESSION['msg']);
        ?>
      </div>  
      <?php endif; ?>
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html"><?= $_SESSION['fullname'] ?? "" ?> / <?= $_SESSION['email'] ?? "" ?></a></li>
                        <li> <a href="logout.php" class="logout-btn">    <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                     
                    </ul>
                    <h2>Our Products</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Product Start-->
        <section class="product">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="product__sidebar">
                            <div class="shop-search product__sidebar-single">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                </form>
                            </div>
                            <div class="product__price-ranger product__sidebar-single">
                                <h3 class="product__sidebar-title">Price</h3>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <input type="text" readonly="" class="min">
                                        <span>-</span>
                                        <input type="text" readonly="" class="max">
                                        <input type="submit" value="Filter">
                                    </div>
                                </div>
                            </div>
                            <div class="shop-category product__sidebar-single">
                                <h3 class="product__sidebar-title">Categories</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Agriculture</a></li>
                                    <li class="active"><a href="#">Dairy Farm</a></li>
                                    <li><a href="#">Economy Solution</a></li>
                                    <li><a href="#">Harvests Innovations</a></li>
                                    <li><a href="#">Organic Food</a></li>
                                    <li><a href="#">Fresh Vegetables</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="product__items">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="product__showing-result">
                                        <div class="product__showing-text-box">
                                            <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                        </div>
                                        <div class="product__showing-sort">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Sort by popular">Sort by popular</option>
                                                    <option value="1">Sort by popular</option>
                                                    <option value="2">Sort by Price</option>
                                                    <option value="3">Sort by Ratings</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__all">
                                <div class="row">
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-1.jpg" alt="">
                                                    <span class="product__all-sale">Sale</span>
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Brown
                                                        Bread</a></h4>
                                                <p class="product__all-price">$23.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-2.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Red
                                                        Onion</a></h4>
                                                <p class="product__all-price">$10.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-3.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Broccoli</a></h4>
                                                <p class="product__all-price">$12.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-4.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Fresh
                                                        Potato</a></h4>
                                                <p class="product__all-price">$16.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-5.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Tomatos</a></h4>
                                                <p class="product__all-price">$13.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-6.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Lemons</a>
                                                </h4>
                                                <p class="product__all-price">$10.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-7.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Red
                                                        Chilli</a></h4>
                                                <p class="product__all-price">$18.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-8.jpg" alt="">
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Carrots</a></h4>
                                                <p class="product__all-price">$8.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                    <!--Product All Single Start-->
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="product__all-single">
                                            <div class="product__all-img-box">
                                                <div class="product__all-img">
                                                    <img src="assets/images/shop/shop-product-1-2.jpg" alt="">
                                                    <span class="product__all-sale">Sale</span>
                                                    <div class="product__all-img-icon">
                                                        <a href="cart.html"><i class="icon-shopping-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__all-content">
                                                <div class="product__all-review">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4 class="product__all-title"><a href="product-details.html">Brown
                                                        Bread</a></h4>
                                                <p class="product__all-price">$23.00</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product All Single End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Product End-->

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer-shape-1 float-bob-x" style="background-image: url(assets/images/shapes/site-footer-shape-1.png);"></div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__logo">
                                        <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                                    </div>
                                    <div class="footer-widget__about-text-box">
                                        <p class="footer-widget__about-text">Welcome to our Agriculture Farming. Lorem
                                            simply text amet cing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__Explore">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Explore</h3>
                                    </div>
                                    <ul class="footer-widget__Explore-list list-unstyled">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="farmers.html">Our Farmers</a></li>
                                        <li><a href="project-01.html">New Projects</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__news">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">News</h3>
                                    </div>
                                    <ul class="footer-widget__news-list list-unstyled">
                                        <li>
                                            <div class="footer-widget__news-img">
                                                <img src="assets/images/resources/footer-widget-news-img-1.jpg" alt="">
                                            </div>
                                            <div class="footer-widget__news-content">
                                                <p class="footer-widget__news-date">20 Jul, 2022</p>
                                                <h5 class="footer-widget__news-sub-title"><a href="blog-details.html">A
                                                        Organic Food
                                                        Gives
                                                        More Good Taste</a></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-widget__news-img">
                                                <img src="assets/images/resources/footer-widget-news-img-2.jpg" alt="">
                                            </div>
                                            <div class="footer-widget__news-content">
                                                <p class="footer-widget__news-date">20 Jul, 2022</p>
                                                <h5 class="footer-widget__news-sub-title"><a href="blog-details.html">A
                                                        Organic Food
                                                        Gives
                                                        More Good Taste</a></h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__Contact">
                                    <div class="footer-widget__title-box">
                                        <h3 class="footer-widget__title">Contact</h3>
                                    </div>
                                    <ul class="footer-widget__Contact-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-phone-square-alt"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:9200886823">+92 (0088) 6823</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="text">
                                                <p>80 Broklyn Golden Street. USA</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="footer-widget__Contact-form">
                                        <div class="footer-widget__Contact-input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                            <button type="submit" class="footer-widget__Contact-btn"><i class="icon-right-arrow"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright 2022 by <a href="#">Agrion.com</a></p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                                <div class="site-footer__bottom-scroll">
                                    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="143" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@agrion.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->



    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>




    <!-- template js -->
    <script src="assets/js/agrion.js"></script>
</body>

</html>
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
                        <li> </li>
                     
                    </ul>
                    <h2>Our Products</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->






<div class="services-details">
            <div class="container">
                <div class="row">
                   <?php include 'sidemenu.php'?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            <div class="services-details__content-box">
                                <div class="services-details__img">
                                    <img src="assets/images/services/services-details-img-1.jpg" alt="">
                                    <div class="services-details__img-icon">
                                        <span class="icon-organic-food"></span>
                                    </div>
                                </div>
                                <h3 class="services-details__title">Agriculture Products</h3>
                                <p class="services-details__text-1">Lorem ipsum is simply free text used by copytyping
                                    refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et
                                    quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var
                                    sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry. Lorem Ipsum has been the ndustry
                                    standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                    type and scrambled it to make a type specimen book.</p>
                                <p class="services-details__text-2">When an unknown printer took a galley of type and
                                    scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                            <div class="service-details__choose">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="service-details__choose-img">
                                            <img src="assets/images/services/service-details-benefit-img.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="service-details__choose-content">
                                            <h4 class="service-details__choose-title">Why Choose?</h4>
                                            <p class="service-details__choose-text">Duis aute irure dolor in
                                                reprehenderit in voluptate velit esse cillum.</p>
                                            <ul class="list-unstyled service-details__choose-points">
                                                <li>
                                                    <div class="icon">
                                                        <i class="icon-tick"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Refresing to get such a touch</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="icon-tick"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Duis aute irure dolor in in voluptate</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="icon-tick"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p>Velit esse cillum eu fugiat pariatur</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-details__faq">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Company Provides a Full Range of Services?</h4>
                                        </div>
                                        <div class="accrodion-content" style="">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo
                                                    ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                                    adipisi cing elit.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Home Improvement Works are Expensive?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo
                                                    ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                                    adipisi cing elit.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Taking Seamless Key Performance Indicators?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum
                                                    leo
                                                    ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                                    adipisi cing elit.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>










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

       <?php include 'footer.php'?>
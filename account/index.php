<?php include 'header.php'?>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">



         <?php
            $result = mysqli_query($con,"SELECT * FROM slider");
if (mysqli_num_rows($result) > 0) {
    $i=0;
while($row = mysqli_fetch_array($result)) {
?>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(dashboard/uploads/slider/<?php print $row["ufile"]?>);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title"><?php echo $row["slide_title"]; ?></p>
                                        <h2 class="main-slider__title"><?php echo $row["slide_text"]; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                               <?php
            
                $i++;
                }
}
else{
    echo "No Slide found";
}
?> 





                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->

    

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-shape-1 float-bob-x">
                <img src="assets/images/shapes/about-one-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title text-left">
                            
                                <h2 class="section-title__title"><?php print $about_title?></h2>
                               
                            </div>
                            <p class="about-one__text-1"></p>
                            <p class="about-one__text-2" style=" text-align: justify;"><?php print $about_text;?></p>
                            
                           
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="about-one__img-one">
                                    <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                </div>
                                <div class="about-one__img-two">
                                    <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                </div>
                                <div class="about-one__video-link">
                                    <a href="assets/images/video.mp4" class="video-popup">
                                        <div class="about-one__video-icon">
                                            <span class="fa fa-play"></span>
                                            <i class="ripple"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one__bg" style="background-image: url(assets/images/shapes/services-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
        
                    <h2 class="section-title__title">Services We’re offering</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">


<?php
$qs = "SELECT * FROM service ORDER BY id ASC LIMIT 4";
$r1 = mysqli_query($con, $qs);

while ($rod = mysqli_fetch_array($r1)) {
    $id = "$rod[id]";
    $serviceg = "$rod[service_title]";
    $service_desc = "$rod[service_desc]";
        $ufile = "$rod[ufile]";

    print "<!--Services One Single Start-->
<div class='col-xl-3 col-lg-6 col-md-6 wow fadeInLeft' data-wow-delay='100ms'>
    <div class='services-one__single'>
        <div class='services-one__img-box'>
            <div class='services-one__img'>
                <img src='dashboard/uploads/services/$ufile' alt=''>
            </div>
            <div class='services-one__icon'>
                <span class='icon-tractor'></span>
            </div>
        </div>
        <div class='services-one__content'>
            <h3 class='services-one__title'><a href='agriculture-products.html'>$serviceg <br>
                    Products</a></h3>
       
        </div>
    </div>
</div>
<!--Services One Single End-->
                    ";
}
?>


                </div>
            </div>
        </section>
        <!--Services One End-->

      

       

   

      

      

        <!--Project One Start-->
        <section class="project-one">
            <div class="project-one__bg float-bob-y-2" style="background-image: url(assets/images/shapes/project-one-shape-1.png);">
            </div>
            <div class="container">
                <div class="section-title text-center">
                  
                    <h2 class="section-title__title">Recently completed Projects</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-1.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">healthy</span>
                                    <h3 class="project-one__title"><a href="project-details.html">organic
                                            <br> solutions</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-2.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">farming</span>
                                    <h3 class="project-one__title"><a href="project-details.html">Harvest
                                            <br> Innovations</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-3.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">organic</span>
                                    <h3 class="project-one__title"><a href="project-details.html">Agriculture
                                            <br> farming</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                    <!--Project One Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="project-one__single">
                            <div class="project-one__inner">
                                <div class="project-one__img">
                                    <img src="assets/images/project/project-one-4.jpg" alt="">
                                </div>
                                <div class="project-one__arrow">
                                    <a href="project-details.html"><i class="icon-right-arrow"></i></a>
                                </div>
                                <div class="project-one__content">
                                    <span class="project-one__tagline">solution</span>
                                    <h3 class="project-one__title"><a href="project-details.html">the Farming
                                            <br> season</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Project One Single Start-->
                </div>
            </div>
        </section>
        <!--Project One End-->



        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
         
                    <h2 class="section-title__title">Latest News</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>
                <div class="row">

    
        <?php
      
        $result = mysqli_query($con,"SELECT * FROM blog");
        if (mysqli_num_rows($result) > 0) {
$i=0;
while($row = mysqli_fetch_array($result)) {
$timestamp = $row["updated_at"];

// Get day (e.g., 1, 2, 3, etc.)
$day = date('d', strtotime($timestamp));

// Get month (e.g., Jan, Feb, Mar, etc.)
$month = date('M', strtotime($timestamp));
?>


                            <!--Blog One Single Start-->
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog-one__single">
                            <div class="blog-one__img">
                            <img src="dashboard/uploads/blog/<?php echo $row["ufile"]; ?>" alt="">
                            <div class="blog-one__date">
                            <span><?php echo $day; ?></span>
                            <p><?php echo $month; ?></p>
                            </div>
                            </div>
                            <div class="blog-one__content">
                           
                            <h3 class="blog-one__title"><a href="news-details.php?id=<?php echo $row["id"]; ?>"><?php echo $row["blog_title"]; ?>
                            </a></h3>
                            </div>
                            </div>
                            </div>
                            <!--Blog One Single End-->
                           <?php
            $i++;
        }
}
else{
echo "No result found";
}
?>
                    
                </div>
            </div>
        </section>
        <!--Blog One End-->

<?php include 'footer.php'?>
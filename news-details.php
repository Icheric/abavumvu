<?php include 'header.php';
$todo= mysqli_real_escape_string($con,$_GET["id"]); 
?>


        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="home">Home</a></li>
                        <li><span>/</span></li>
                        <li>News</li>
                    </ul>
                    <h2>News Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->




        <?php
    $rt=mysqli_query($con,"SELECT * FROM blog where id='$todo'");
    $tr = mysqli_fetch_array($rt);
    $blog_title = "$tr[blog_title]";
    $blog_desc = "$tr[blog_desc]";
    $blog_detail = "$tr[blog_detail]";
    $upadated_at = "$tr[updated_at]";
    $ufile = "$tr[ufile]";
    $timestamp = $tr["updated_at"];

// Get day (e.g., 1, 2, 3, etc.)
$day = date('d', strtotime($timestamp));

// Get month (e.g., Jan, Feb, Mar, etc.)
$month = date('M', strtotime($timestamp));
?>
        <!--Blog Details Start-->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="dashboard/uploads/blog/<?php print $ufile;?>" alt="">
                                <div class="blog-details__date">
                                    <p><?php echo $day; ?></p>
                                    <span><?php echo $month; ?></span>
                                </div>
                            </div>
                            <div class="blog-details__content">
                              
                                <h3 class="blog-details__title"><?php print $blog_title;?></h3>
                                <p class="blog-details__text-1"><?php print $blog_detail;?></p>
                            </div>
                           
                          
                    
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                          
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">All News</h3>
                                <ul class="sidebar__post-list list-unstyled">

                                <?php
                                                $result = mysqli_query($con,"SELECT * FROM blog LIMIT 10");
if (mysqli_num_rows($result) > 0) {
    $i=0;
while($row = mysqli_fetch_array($result)) {
?>  
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="dashboard/uploads/blog/<?php echo $row["ufile"]; ?>" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                               
                                                <a href="news-details.php?id=<?php echo $row["id"]; ?>"><?php print $row["blog_title"]; ?></a>
                                            </h3>
                                        </div>
                                    </li>
                                <?php
                                                $i++;
                                            }
}
else{
    echo "No comment found";
}
?>
                                </ul>
                            </div>
                         
                           
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Details End-->

       <?php include 'footer.php'?>

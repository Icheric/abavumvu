<?php include 'header.php'?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 

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
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Shop</li>
                    </ul>
                    <h2>Checkout</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Checkout Page-->
        <section class="checkout-page">
            <div class="container">
                <div class="row">
                 <div class="col-lg-6 col-xl-6">
                          <div class="billing_title">
                                <h2>Membership</h2>
                            </div>
                        <hr>
                      
                        <div class="product-details__content">
                            <p class="product-details__content-text1">Membership is open who wishes to further the interests of the bees and the Platform. The platform is open to global bee stakeholders including students beekeepers, honey packers and traders, researchers, bee equipment manufacturers, and corporate bodies.</p>
                    
                        </div>

                      


        <div class="billing_title">
                                <h2>Membership Fees/ subscriptions</h2>
                            </div>
                        <hr>
                      
                        <div class="product-details__content">
                            
                    <div class="product-description__list">
                    <ul class="list-unstyled">
                        <li>
                            <p><span class="icon-right-arrow"></span>Individual membership</p>
                        </li>
                        <li>
                            <p><span class="icon-right-arrow"></span>Institutional membership</p>
                        </li>
                        <li>
                            <p><span class="icon-right-arrow"></span>Corporate Member
                            </p>
                        </li>
                    </ul>
                </div>
                        </div>

                 
                  
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="billing_details">
                            <div class="billing_title">
                                <h2>Membership Form</h2>
                            </div>


<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNumber = $_POST['company_name'];
    $address = $_POST['Address'];
    $province = $_POST['province'];
    $membershipType = $_POST['membership_type'];
    $additionalInfo = $_POST['message'];

    // Prepare and execute the SQL query to insert data into the table
    $sql = "INSERT INTO membership (first_name, last_name, phone_number, address, province, membership_type, additional_info) VALUES ('$firstName', '$lastName', '$phoneNumber', '$address', '$province', '$membershipType', '$additionalInfo')";
    
    if ($con->query($sql) === TRUE) {
     echo "<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>";
        echo "<script>
                swal('Success', 'Data inserted successfully', 'success').then(function() {
                    window.location = 'home';
                });
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form class="billing_details_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                              
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="first_name" value="" placeholder="Your Full Names*" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="last_name" value="" placeholder="Your Email Address*" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="company_name" value="" placeholder="Your Phone Number*">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="Address" value="" placeholder="Your Address*">
                                        </div>
                                    </div>
                                 <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide" name="province">
                                                    <option data-display="Select Province*">Select Province*</option>
                                                    <option value="Kigali">Kigali</option>
                                                    <option value="Southern">Southern</option>
                                                    <option value="Western">Western</option>
                                                    <option value="Northern">Northern</option>
                                                    <option value="Eastern">Eastern</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                 
                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide" name="membership_type">
                                                    <option data-display="Select Membership Type*">Select Membership Type*</option>
                                                    <option value="Individual">Individual</option>
                                                    <option value="Corporate ">Corporate</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                              <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Any other Information*"></textarea>
                                </div>
                                        </div>
                                    </div>
                                
                                <div class="text-right d-flex justify-content-end">

                                        <button type="submit" name="submit" class="thm-btn">Join Now <i class="icon-right-arrow"></i></button>


                                <a href="#" class="thm-btn">Join Now <i class="icon-right-arrow"></i></a>
                            </div>
                                </div>
                            
                        
                            </form>
                        </div>
                    </div>


        
                </div>
               
            </div>
        </section>
        <!--End Checkout Page-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <?php include 'footer.php'?>
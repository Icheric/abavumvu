<?php include 'header.php'?>
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
                        <li>Apply</li>
                    </ul>
                    <h2>Become a Member</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Google Map Start-->
        <section class="google-map">
            <div class="container">
              
                <div class="contact-details">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-help"></span>
                                </div>
                                <div class="contact-details__text">
                                    <p>Have Question?</p>
                                    <h3><a href="tel:9288006802">Free +250 (1234) 6802</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-mailbox"></span>
                                </div>
                                <div class="contact-details__text">
                                    <p>Write Email</p>
                                    <h3><a href="mailto:needhelp@company.com">needhelp@abavumvu.rw</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="contact-details__single contact-details__single-last">
                                <div class="contact-details__icon">
                                    <span class="icon-maps-and-flags"></span>
                                </div>
                                <div class="contact-details__text">
                                    <p>Visit Office</p>
                                    <h3>Kacyiru KG 7 Ave, Kigali</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__social">
                                    <a href="https://twitter.com/FAORwanda"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Google Map End-->

        <!--Contact Two Start-->
        <section class="contact-two">
            <div class="contact-two__shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">ABAVUMVU</span>
                    <h2 class="section-title__title">Membership Form</h2>
                    <div class="section-title__icon">
                        <img src="assets/images/icon/section-title-icon-1.png" alt="">
                    </div>
                </div>


                <?php

// Assuming you have already connected to the database ($con)
$query = "SELECT `id`, `country`, `state`, `city` FROM `country_state_city`";
$result = mysqli_query($con, $query);

// Create an associative array to store the states for each country
$statesByCountry = array();
while ($row = mysqli_fetch_assoc($result)) {
    $country = $row['country'];
    $state = $row['state'];

    // If the country is not yet added to the array, initialize an empty array for its states
    if (!isset($statesByCountry[$country])) {
        $statesByCountry[$country] = array();
    }

    // Add the state to the respective country's array
    $statesByCountry[$country][] = $state;
}

// Example: Print the select options for countries
echo '   <div class="select-box"><select class="wide" name="country" id="country">';
foreach ($statesByCountry as $country => $states) {
    echo '<option value="' . $country . '">' . $country . '</option>';
}
echo '</select> <select class="wide" style="display: none;">
                                                    <option data-display="Select a country">Select a Country</option>
                                                    <option value="1">Canada</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                    <option value="3">USA</option>
                                                </select></div>';

// Example: Print the initial empty state select
echo '   <div class="select-box"><select class="wide" name="state" id="state"></select></div>';

mysqli_free_result($result);
mysqli_close($con);
?>
                <div class="contact-two__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-two__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your Name" name="name">
                                </div>
                            </div>
                              <div class="col-xl-6">
                             <div class="select-box">
                                                <select class="wide" style="display: none;">
                                                    <option data-display="Select a country">Select a Country</option>
                                                    <option value="1">Canada</option>
                                                    <option value="2">England</option>
                                                    <option value="3">Australia</option>
                                                    <option value="3">USA</option>
                                                </select><div class="nice-select wide open" tabindex="0"><span class="current">Select a country</span><ul class="list"><li data-value="Select a Country" data-display="Select a country" class="option selected focus">Select a Country</li><li data-value="1" class="option">Canada</li><li data-value="2" class="option">England</li><li data-value="3" class="option">Australia</li><li data-value="3" class="option">USA</li></ul></div>
                                            </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" name="Phone Number">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Comment"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <a href="about.html" class="thm-btn contact-two__btn">Send a Message<i class="icon-right-arrow"></i> </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Contact Two End-->

   <?php include 'footer.php'?>
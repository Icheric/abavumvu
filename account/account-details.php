<?php require_once('auth.php'); include 'header.php';?>

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
      <?php endif; 

    if(count($_POST)>0) {
$password = $_POST['password'];
$hashed_password = md5($password); // Hash the password using MD5

// Check if the password is changed
if (!empty($password)) {
    // Password changed, update all columns including the password
    $query = "UPDATE users SET id='" . $_POST['id'] . "', fullname='" . $_POST['fullname'] . "', phone_number='" . $_POST['phone_number'] . "', address='" . $_POST['address'] . "', email='" . $_POST['email'] . "', province='" . $_POST['province'] . "', password='" . $hashed_password . "' WHERE id='" . $_SESSION['id'] . "'";
} else {
    // Password not changed, update other columns except the password
    $query = "UPDATE users SET id='" . $_POST['id'] . "', fullname='" . $_POST['fullname'] . "', phone_number='" . $_POST['phone_number'] . "', address='" . $_POST['address'] . "', email='" . $_POST['email'] . "', province='" . $_POST['province'] . "' WHERE id='" . $_SESSION['id'] . "'";
}
$message = "Record Modified Successfully";
    echo '<script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "'.$message.'",
            showConfirmButton: false,
            timer: 2000,
            onClose: function() {
                location.reload();
            }
        });
    </script>';
}
$result = mysqli_query($con,"SELECT * FROM users WHERE id='" . $_SESSION['id'] . "'");
$row= mysqli_fetch_array($result);
      ?>

        <!--Services Details Start-->
        <div class="services-details">
            <div class="container">
                <div class="row">
                     <?php include 'sidemenu.php'?>
                    <div class="col-xl-8 col-lg-7">
                        <div class="services-details__right">
                            
                        
                              <form name="frmUser" method="post" action="" class="billing_details_form">
<br>
                                <div class="row bs-gutter-x-20">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="hidden" name="id" class="txtField" value="<?php echo $_SESSION['id']; ?>">
                                            <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="email" name="email" value="<?php echo $row['email']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="phone_number" value="<?php echo $row['phone_number']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="billing_input_box">
                                            <input type="text" name="address" value="<?php echo $row['address']; ?>">
                                        </div>
                                    </div>
                                 <div class="col-xl-12">
                                        <div class="billing_input_box">
                                            <div class="select-box">
                                                <select class="wide" name="province">
                                                       <option value="<?php echo $row['province']; ?>"><?php echo $row['province']; ?></option>
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
                             
                             
                                </div>

                                    <div class="col-xl-12">
                                        <div class="billing_input_box">
                                              <div class="contact-form__input-box text-message-box">
                                    <textarea name="about" placeholder="Any other Information*"><?php echo $row['about']; ?></textarea>
                                </div>
                                        </div>
                                    </div>

  <div class="row bs-gutter-x-20">
    <div class="col-xl-6">
        <div class="billing_input_box">
            <input type="password" name="password" id="password" value="<?php echo $row['password']; ?>" required="">
            <span class="toggle-password" onclick="togglePasswordVisibility('password')"></span>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="billing_input_box">
            <input type="password" name="confirm_password" id="confirm_password" value="<?php echo $row['password']; ?>" required="">
            <span class="toggle-password" onclick="togglePasswordVisibility('confirm_password')"></span>
        </div>
    </div>
</div>
<div id="password_match_message"></div>

                                     
                                
                                <div class="text-right d-flex justify-content-end">

                                        <button type="submit" name="submit" class="thm-btn">Update <i class="icon-right-arrow"></i></button>


                            </div>
                                </div>
                            
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services Details End-->

        <style type="text/css">
            .toggle-password {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    cursor: pointer;
}

.toggle-password:before {
    content: "\f070";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 16px;
    color: #999;
}

.toggle-password.active:before {
    content: "\f06e";
    color: #5cb85c;
}
        </style>
<script>
    var password = document.getElementById("password");
    var confirm_password = document.getElementById("confirm_password");
    var password_match_message = document.getElementById("password_match_message");

    function togglePasswordVisibility(inputId) {
        var input = document.getElementById(inputId);
        input.type = (input.type === "password") ? "text" : "password";
    }

    function validatePassword() {
        if (password.value !== confirm_password.value) {
            confirm_password.setCustomValidity("Passwords do not match");
            password_match_message.innerHTML = "Passwords do not match";
            password_match_message.style.color = "red";
        } else {
            confirm_password.setCustomValidity("");
            password_match_message.innerHTML = "Passwords match";
            password_match_message.style.color = "green";
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>



       <?php include 'footer.php';?>
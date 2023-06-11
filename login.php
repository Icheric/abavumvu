<?php 
require_once('auth.php');
require_once('connectdb.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    extract($_POST);
    $stmt = $con->prepare("SELECT * FROM `users` where `email` = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
        $data = $result->fetch_assoc();
        if(password_verify($password, $data['password'])){
            foreach($data as $k => $v){
                if($k != 'password'){
                    $_SESSION[$k] = $v;
                }
            }
            $_SESSION['msg']['success'] = "You have login successfully.";
            header('location: account/profile');
            exit;
        }else{
            $error = "Incorrect Email or Password";
        }
    }else{
        $error = "Incorrect Email or Password";
    }
}
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abavumvu - Membership Form</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
      <div class="forms-container">
        <div class="form-control signup-form">
          
          <form action="#">
            <h2>Signup</h2>
            <input type="text" placeholder="Username" required />
            <input type="email" placeholder="Email" required />
            <input type="password" placeholder="Password" required />
            <input type="password" placeholder="Confirm password" required />
            <button>Signup</button>
          </form>
          <span>or signup with</span>
          <div class="socials">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-google-plus-g"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
        <div class="form-control signin-form">
                <?php if(isset($error) && !empty($error)): ?>
            <div class="message-error"><?= $error ?></div>
        <?php endif; ?>
        <?php if(isset($_SESSION['msg']['success']) && !empty($_SESSION['msg']['success'])): ?>
        <div class="message-success">
            <?php 
            echo $_SESSION['msg']['success'];
            unset($_SESSION['msg']);
            ?>
        </div>  
        <?php endif; ?>
          <form action="" method="POST">
            <h2>Signin</h2>
            <input type="email" id="email" name="email" value="<?= $_POST['email'] ?? "" ?>" required="required" />
            <input type="password" id="password" name="password" value="<?= $_POST['password'] ?? "" ?>" required="required" />
            <button>Signin</button>
          </form>
          <span>or signin with</span>
          <div class="socials">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-google-plus-g"></i>
            <i class="fab fa-linkedin-in"></i>
          </div>
        </div>
      </div>
      <div class="intros-container">
        <div class="intro-control signin-intro">
          <div class="intro-control__inner">
            <h2>Welcome back!</h2>
            <p>
              Welcome back! We are so happy to have you here. It's great to see you again. We hope you had a safe and enjoyable time away.
            </p>
            <button id="signup-btn">No account yet? Signup.</button>
          </div>
        </div>
        <div class="intro-control signup-intro">
          <div class="intro-control__inner">
            <h2>Come join us!</h2>
            <p>
              We are so excited to have you here.If you haven't already, create an account to get access to exclusive offers, rewards, and discounts.
            </p>
            <button id="signin-btn">Already have an account? Signin.</button>
          </div>
        </div>
      </div>
    </div>
  <script  src="./script.js"></script>
</body>
</html>
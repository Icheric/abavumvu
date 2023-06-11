<?php
session_start();
$id = session_id();
$_self = $_SERVER["PHP_SELF"];
if(stripos($_self, 'account/profile.php')){
    if(!isset($_SESSION['id']) || (isset($_SESSION['id']) && $_SESSION['id'] <= 0)){
        header('location: loginsss.php');
    }
} elseif(stripos($_self, 'login.php') || stripos($_self, 'reset-password.php') || stripos($_self, 'forgot-password.php')){
    if(isset($_SESSION['id']) && $_SESSION['id'] > 0){
        header('location: account/profile.php');
    }
}


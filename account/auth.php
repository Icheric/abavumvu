<?php
session_start();
$_self = $_SERVER["PHP_SELF"];
if(stripos($_self, 'profile')){
    if(!isset($_SESSION['id']) || (isset($_SESSION['id']) && $_SESSION['id'] <= 0)){
        header('location: ../home');
    }
} elseif(stripos($_self, 'login') || stripos($_self, 'reset-password') || stripos($_self, 'forgot-password')){
    if(isset($_SESSION['id']) && $_SESSION['id'] > 0){
        header('location: profile');
    }
}


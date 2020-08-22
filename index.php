<?php
session_start();
if(isset($_SESSION['uname'])){
    header('location:profile.php');
}else{
require_once('loginform.php');
}

?>
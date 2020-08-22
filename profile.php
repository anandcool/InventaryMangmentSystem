<?php
session_start();
if($_SESSION['uname']){
    include 'profilepage.php';
}else{
    header('location:index.php');
}
?>
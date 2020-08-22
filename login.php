<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    // echo $password;
    include_once('connection.php');

    $sql = "SELECT * FROM `admin` where `email` = :email AND `password` = :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=>$email,'pass'=>$pass]);
    $row_count = $stmt->rowCount();
    // echo $row_count;
    if($row_count){
    $rows = $stmt->fetch(PDO::FETCH_OBJ);
    $_SESSION['uname'] = $rows->email;
    header('location:profile.php');
    }
}

?>
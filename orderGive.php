<?php
if(isset($_POST['submit'])){
    include_once('connection.php');
    $device = $_POST['device'];
    $employee = $_POST['employee'];
    $rdate = $_POST['rdate'];
    $qty = $_POST['qty'];
    $sql = "INSERT INTO `orders`(`deviceid`,`employeeid`,`status`,`return_date`,`qty`) VALUES (:deviceid,:employeeid,:status,:return_date,:qty)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['deviceid'=>$device,'employeeid'=>$employee,'status'=>'Accquired','return_date'=>$rdate,'qty'=>$qty]);
    if($stmt){
        echo "Order Added succesfully"; // write the if greater situation of product
        $sql = "UPDATE `devices` SET `deviceqty`=(`deviceqty`-$qty) WHERE `deviceid`=:deviceid";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(['deviceid'=>$device]);
    }

}
?>
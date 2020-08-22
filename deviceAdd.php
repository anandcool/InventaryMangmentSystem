<?php
if(isset($_POST['submit'])){
    require_once('connection.php');
    $dname = $_POST['dname'];
    $qty = $_POST['qty'];
    $sql = "INSERT INTO `devices`(`devicename`,`deviceqty`) VALUES (:dname,:qty)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['dname'=>$dname,'qty'=>$qty]);
    if($stmt){
        ?>
        <script>
        window.alert("Device Added Succesfully");
        window.location.href="Adddevice.php";
        </script>
        <?php
    }
}
?>
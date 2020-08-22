<?php
if(isset($_POST['submit'])){
    require_once('connection.php');
    $empid = $_POST['empid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `employee` VALUES (:employeeId,:name,:email)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(['employeeId'=>$empid,'name'=>$name,'email'=>$email]);
    if($stmt){
        ?>
        <script>
        window.alert("Employee Added Succesfully");
        window.location.href="Addemployee.php"sss;
        </script>
        <?php
    }
}
?>
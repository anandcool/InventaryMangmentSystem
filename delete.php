<?php
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
include_once('connection.php');
?>
<script>
if(window.confirm('Are You Want to Delete')){
<?php
    $sql = "DELETE FROM `employee` WHERE `employeeid` =:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    $row_count = $stmt->rowCount();    
    if($row_count){
        ?>
        window.alert("Employee Delete Succesfully");
        window.location.href="showemployee.php";
        <?php
    }
?>
}else{
    window.location.href="showemployee.php";
}
</script>
<?php
}
?>
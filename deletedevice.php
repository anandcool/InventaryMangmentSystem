<?php
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
include_once('connection.php');
?>
<script>
if(window.confirm('Are You Want to Delete')){
<?php
    $sql = "DELETE FROM `devices` WHERE `deviceid` =:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id'=>$id]);
    $row_count = $stmt->rowCount();    
    if($row_count){
        ?>
        window.alert("Device Delete Succesfully");
        window.location.href="showalldevice.php";
        <?php
    }
?>
}else{
    window.location.href="showalldevice.php";
}
</script>
<?php
}
?>
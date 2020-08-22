<?php
include_once('connection.php');
include_once('header.php');
$sql1 = "SELECT * FROM `devices`";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$rows1 = $stmt1->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Device Name</th>
      <th scope="col">Accquired</th>
      <th scope="col">Vacant</th>
      <th scope="col">Total Quantity</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($rows1 as $row){
          ?>
    <tr class="table-active">

      <td><?php echo $row->devicename;?></td>
      <?php
      $sql = "SELECT * FROM `orders` WHERE `status`='Accquired' AND `deviceid` = :deviceid";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['deviceid'=>$row->deviceid]);
      $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
      $accquired = 0;
      foreach ($rows as $counter){
        $accquired = $accquired + $counter->qty;
      }
    ?>
      <td><?php echo $accquired;?></td>
      <td><?php echo $row->deviceqty;?></td>

      <td><?php echo $totalqty = $accquired + $row->deviceqty;?></td>
      <td><a class="btn btn-danger" href="deletedevice.php?id=<?php echo $row->deviceid;?>">Delete</a></td>
    </tr>
    <?php
      }
      ?>
</tbody>
</table>


<?php
include_once('footer.php');
?>
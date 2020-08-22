<?php
include_once('header.php');
include_once('connection.php');
$sql1 = "SELECT * FROM `employee`";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$rows1 = $stmt1->fetchAll(PDO::FETCH_OBJ);
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
    </tr>
  </thead>
  <tbody>
  <?php
      foreach($rows1 as $row){
          ?>
    <tr class="table-active">

      <td><?php echo $row->name;?></td>
      <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row->employeeid;?>">Delete</a></td>
    </tr>
    <?php
      }
      ?>
</tbody>
</table>

<?php
include_once('footer.php');
?>
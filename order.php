<?php
include_once('header.php');
include_once('connection.php');
$sql = "SELECT * FROM `devices`";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);
$sql1 = "SELECT * FROM `employee`";
$stmt1 = $pdo->prepare($sql1);
$stmt1->execute();
$rows1 = $stmt1->fetchAll(PDO::FETCH_OBJ);
?>
<div class="row">
    <div class="col-sm-8 offset-sm-4">
    <div class="card text-white bg-primary mt-5" style="max-width: 30rem;">
      <div class="card-header">
      <h4 class="card-title">Give Product</h4>
      </div>
      <div class="card-body">
        <div class="card-text">
        <form action="orderGive.php" method="post">
      <fieldset>
        <div class="form-group">
          <label>Device Name</label>
      <select class="form-control" name="device">
      <?php
      foreach($rows as $row){
          ?>
        <option value="<?php echo $row->deviceid;?>"><?php echo $row->devicename;?></option>  
          <?php
        }
      ?>
      </select>
        </div>
        <div class="form-group">
          <label >Employee Name</label>
        <select class="form-control" name="employee">
        <?php
      foreach($rows1 as $row){
          ?>
        <option value="<?php echo $row->employeeid;?>"><?php echo $row->name;?></option>  
          <?php
        }
      ?>
      </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Return Date</label>
        <input type="date" class="form-control" name="rdate"/>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Quantity</label>
        <input type="text" class="form-control" name="qty"/>
        </div>
        <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
      </fieldset>
    </form>
        </div>
      </div>
    </div>
    </div>
    </div>
<?php
include_once('footer.php');
?>


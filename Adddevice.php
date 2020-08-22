<?php include "header.php";?>
<div class="row">
    <div class="col-sm-8 offset-sm-4">
    <div class="card text-white bg-primary mt-5" style="max-width: 30rem;">
      <div class="card-header">
      <h4 class="card-title">Add Device</h4>
      </div>
      <div class="card-body">
        <div class="card-text">
        <form action="deviceAdd.php" method="post">
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Device Name</label>
          <input type="text" class="form-control" name="dname" placeholder="Enter Device Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Total Quantity</label>
          <input type="text" class="form-control" name="qty" placeholder="Enter Total Quantity">
        </div>
        <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
      </fieldset>
    </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    <?php include "footer.php";?>
<?php include "header.php";?>
<div class="row">
    <div class="col-sm-8 offset-sm-4">
    <div class="card text-white bg-primary mt-5" style="max-width: 30rem;">
      <div class="card-header">
      <h4 class="card-title">Add Employee</h4>
      </div>
      <div class="card-body">
        <div class="card-text">
        <form action="employeeadd.php" method="post">
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Employee ID</label>
          <input type="text" class="form-control" name="empid" placeholder="Enter Employee ID">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Employee Name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">EmailID</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Employee Email ID">
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
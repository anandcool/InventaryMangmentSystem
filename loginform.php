<?php include 'header.php';?>
    <div class="row">
    <div class="col-sm-8 offset-sm-4">
    <div class="card text-white bg-primary mt-5" style="max-width: 20rem;">
      <div class="card-header">
      <h4 class="card-title">Login Form</h4>
      </div>
      <div class="card-body">
        <div class="card-text">
        <form action="login.php" method="post">
      <fieldset>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
      </fieldset>
    </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    
    <?php include 'footer.php';?>
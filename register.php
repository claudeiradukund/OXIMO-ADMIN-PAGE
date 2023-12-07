<?php
  session_start();
  include('inludes/header.php');
  include('inludes/navbar.php');
?>
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <?php
          include('message.php');
        ?>
        <div class="card">
        <div class="card-header">
          <h4>legister</h4>
        </div>
          <div class="card-body">

          <form action="registercode.php" method="post">
            <div class="form-group mb-3">
              <label>First name</label>
              <input required="required" type="text" name="fname" placeholder="Enter first name" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Last name</label>
              <input required="required" type="text" name="lname" placeholder="Enter last name" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Email id</label>
              <input required="required" type="email" name="email" placeholder="Enter email addess" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Password</label>
              <input required="required" type="password" name="password" placeholder="Enter password" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Confirm Password</label>
              <input required="required" type="password" name="cpassword" placeholder="Confirm password" class="form-control">
            </div>
            <div class="form-group mb-3">
              <button type="submit" name="register_btn" class="btn btn-primary">Register now</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
  include('inludes/footer.php');
?>
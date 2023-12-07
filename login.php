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
          <h4>login</h4>
        </div>
          <div class="card-body">
            <form action="logincode.php" method="POST">
               <div class="form-group mb-3">
                  <label>Email id</label>
                  <input required name="email" type="email" placeholder="Enter email addess" class="form-control">
               </div>
               <div class="form-group mb-3">
                  <label>Password</label>
                  <input required name="password" type="password" placeholder="Enter password" class="form-control">
               </div>
               <div class="form-group mb-3">
                 <button type="submit" name="login_btn" class="btn btn-primary">Login now</button>
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
<?php
  session_start();
  include('inludes/header.php');
  include('inludes/navbar.php');
?>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
           include('message.php');
        ?>
        <h3>Hello</h3>
        <button class="btn btn-primary">login</button>
      </div>
    </div>
  </div>
</div>
<?php
  include('inludes/footer.php');
?>
<?php
  include('config/dbcon.php');
  include('D:\xampp\htdocs\oximo websites\Admin_parts\includes\header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">OUR SERVICES</li>
    </ol>
    <div class="row">
      <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">Architecture</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white" href="insert_architecture_project.php">Insert Project</a><br>
              <a class="small text-white" href="view_projects.php">View Projects</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-warning text-white mb-4">
            <div class="card-body">Engineering</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white" href="insert_engineering_project.php">Insert Project</a><br>
              <a class="small text-white" href="view_projects.php">View Projects</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-success text-white mb-4">
            <div class="card-body">Project Management</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
              <a class="small text-white" href="insert_projectmanagement_project.php">Insert Project</a><br>
              <a class="small text-white" href="view_projects.php">View Projects</a>
              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-danger text-white mb-4">
            <div class="card-body">Master Planning</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white" href="insert_masterplanning_project.php">Insert Project</a><br>
               <a class="small text-white" href="view_projects.php">View Projects</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card bg-secondary text-white mb-4">
             <div class="card-body">Interior Design</div>
             <div class="card-footer d-flex align-items-center justify-content-between">
               <a class="small text-white" href="insert_interior_design_project.php">Insert Project</a><br>
               <a class="small text-white" href="view_projects.php">View Projects</a>
               <div class="small text-white"><i class="fas fa-angle-right"></i></div>
             </div>
          </div>
        </div>
      </div>
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>
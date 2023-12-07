<?php
  include('config/dbcon.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">INTERIOR DESIGN SERVICES</li>
    </ol>
    <!----- stating of inserting interior design projects -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Interior Design Project</h1>
       <!-- form -->
       <form action="" method="POST"  enctype="multipart/form-data">
           <!-- title -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_title" class="form-label">project title</label>
              <input type="text" name="project_title" id="project_title" class="form-control" placeholder="enter project title" autocomplete="off" required="required">
           </div>
           <!-- description -->
           <div class="inputbox">
              <span name="project_description">Type Your Project description</span>
              <textarea name="project_description" required="required"></textarea>
           </div>
           <!--keyword -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_keywords" class="form-label">project keywords</label>
              <input type="text" name="project_keywords" id="project_keywords" class="form-control" placeholder="enter project keywords" autocomplete="off" required="required">
           </div>
           <!-- project location -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_location" class="form-label">project location</label>
              <input type="text" name="project_location" id="project_location" class="form-control" placeholder="enter project location" autocomplete="off" required="required">
           </div>
           <!-- project land scale -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_landscale" class="form-label">project landscale</label>
              <input type="text" name="project_landscale" id="project_landscale" class="form-control" placeholder="enter project landscale" autocomplete="off" required="required">
           </div>
           <!-- project year of published -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_year" class="form-label">project year</label>
              <input type="text" name="project_year" id="project_year" class="form-control" placeholder="enter project year" autocomplete="off" required="required">
           </div>
           <!--image1-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_image1" class="form-label">project image1</label>
              <input type="file" name="project_image1" id="project_image1" class="form-control" required="required">
           </div>
           <!--image2-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_image2" class="form-label">project image2</label>
              <input type="file" name="project_image2" id="project_image2" class="form-control" required="required">
           </div>
           <!--insert button -->
           <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_project" class="btn btn-info mb-3 px-3" value="insert project">
           </div>
       </form>
    </div> 
    <!----- ending of inserting interior design projects-------->
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>

<!---- inserting data into data base ---->
<?php 
if(isset($_POST['insert_project'])) {
    // Retrieve form data
    $projectTitle = $_POST['project_title'];
    $projectDescription = $_POST['project_description']; // This was missing in your HTML form
    $projectKeywords = $_POST['project_keywords'];
    $projectLocation = $_POST['project_location'];
    $projectLandscale = $_POST['project_landscale'];
    $projectYear = $_POST['project_year'];
    $image1 = $_FILES['project_image1']['name'];
    $image2 = $_FILES['project_image2']['name'];

    // Move uploaded images to a directory (you should set up a directory to store images)
    $targetDir = "uploads/"; // Change this to your desired directory
    move_uploaded_file($_FILES['project_image1']['tmp_name'], $targetDir . $image1);
    move_uploaded_file($_FILES['project_image2']['tmp_name'], $targetDir . $image2);

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO `interior_design`(`project_name`, `project_description`, `location`, `landscale`, `year`, `image1`, `image2`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $projectTitle, $projectDescription, $projectLocation, $projectLandscale, $projectYear, $image1, $image2);
    
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
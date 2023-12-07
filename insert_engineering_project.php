<?php
  include('config/dbcon.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">ENGINEERING SERVICES</li>
    </ol>
    <!----- stating of inserting engineering project -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Engineering Project</h1>
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
           <!--image3-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_image3" class="form-label">project image3</label>
              <input type="file" name="project_image3" id="project_image3" class="form-control" required="required">
           </div>
           <!--insert button -->
           <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_project" class="btn btn-info mb-3 px-3" value="insert project">
           </div>
       </form>
    </div> 
    <!----- ending of inserting engineering project -------->
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>
<!---- inserting codes into data base ---->
<?php
if (isset($_POST['insert_project'])) {
    // Retrieve data from the form
    $project_title = $_POST['project_title'];
    $project_description = $_POST['project_description']; // Retrieve description
    $project_keywords = $_POST['project_keywords'];
    $project_location = $_POST['project_location'];
    $project_landscale = $_POST['project_landscale'];
    $project_year = $_POST['project_year'];

    // File upload handling for images
    $targetDir = "uploads/"; // Change this to your desired directory
    $project_image1 = $targetDir . basename($_FILES["project_image1"]["name"]);
    $project_image2 = $targetDir . basename($_FILES["project_image2"]["name"]);
    $project_image3 = $targetDir . basename($_FILES["project_image3"]["name"]);

    // Insert data into the database
    $sql = "INSERT INTO `engineering_project`(`project_name`, `project_description`, `location`, `landscale`, `year`, `image1`, `image2`, `image3`, `date`) 
            VALUES ('$project_title','$project_description','$project_location','$project_landscale','$project_year','$project_image1','$project_image2','$project_image3', NOW())";

    if ($conn->query($sql) === TRUE) {
        // File upload handling
        move_uploaded_file($_FILES["project_image1"]["tmp_name"], $project_image1);
        move_uploaded_file($_FILES["project_image2"]["tmp_name"], $project_image2);
        move_uploaded_file($_FILES["project_image3"]["tmp_name"], $project_image3);
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
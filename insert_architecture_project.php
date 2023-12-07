<?php
  include('config/dbcon.php');
  include('includes/header.php');
  include('config/dbcon.php')
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">ARCHITECTURE SERVICES</li>
    </ol>
    <!----- stating of inserting architecture project -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Architecture Project</h1>
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
           <!--image4-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_image4" class="form-label">project image4</label>
              <input type="file" name="project_image4" id="project_image4" class="form-control" required="required">
           </div>
           <!--image5-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="project_image5" class="form-label">project image5</label>
              <input type="file" name="project_image5" id="project_image5" class="form-control" required="required">
           </div>
           <!--insert button -->
           <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_project" class="btn btn-info mb-3 px-3" value="insert project">
           </div>
       </form>
    </div> 
    <!----- ending of inserting architecture project -------->
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>
<!---- conection for data base ------ >
<?php
if (isset($_POST['insert_project'])) {
    $project_title = $_POST['project_title'];
    $project_description = $_POST['project_description']; // Assuming this field was missing in the form and added here
    $project_keywords = $_POST['project_keywords'];
    $project_location = $_POST['project_location'];
    $project_landscale = $_POST['project_landscale'];
    $project_year = $_POST['project_year'];
    // File handling for images (omitted for brevity)
    // Handling file uploads
    $image1 = $_FILES['project_image1']['name'];
    $image2 = $_FILES['project_image2']['name'];
    $image3 = $_FILES['project_image3']['name'];
    $image4 = $_FILES['project_image4']['name'];
    $image5 = $_FILES['project_image5']['name'];
    // Check for duplicate entry
    $check_query = "SELECT * FROM architecture_project WHERE project_title = '$project_title' AND project_location = '$project_location'";
    $result = $conn->query($check_query);
    
    if ($result->num_rows > 0) {
        echo "Data already exists for this title and location. Please try again.";
    } else {
        // Insert data into the database
        $insert_query = "INSERT INTO architecture_project (project_name, project_description, project_keywords, location, landscale, year, image1, image2, image3, image4, image5)
        VALUES ('$project_title', '$project_description', '$project_keywords', '$project_location', '$project_landscale', '$project_year', '$image1', '$image2', '$image3', '$image4', '$image5')";
        
        if ($conn->query($insert_query) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

// Close the connection
$conn->close();
?>

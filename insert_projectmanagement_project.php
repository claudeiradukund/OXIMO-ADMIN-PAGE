<?php
  include('config/dbcon.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">PROJECT MANAGEMENT SERVICES</li>
    </ol>
    <!----- stating of inserting project management -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Project Management Projects</h1>
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
    <!----- ending of inserting project management projects-------->
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>
<!---- inserting data into data base ------>
<?php
if(isset($_POST['insert_project'])) {
    // Fetching form data
    $project_title = $_POST['project_title'];
    $project_description = $_POST['project_description']; // Add the name attribute in the textarea
    $project_keywords = $_POST['project_keywords'];
    $project_location = $_POST['project_location'];
    $project_landscale = $_POST['project_landscale'];
    $project_year = $_POST['project_year'];
    
    // Uploading images
    $image1 = $_FILES['project_image1']['name'];
    $image2 = $_FILES['project_image2']['name'];
    $image3 = $_FILES['project_image3']['name'];
    
    // Temporary file paths for images
    $temp_image1 = $_FILES['project_image1']['tmp_name'];
    $temp_image2 = $_FILES['project_image2']['tmp_name'];
    $temp_image3 = $_FILES['project_image3']['tmp_name'];

    // Move uploaded images to a folder
    move_uploaded_file($temp_image1, "all_images/" . $image1);
    move_uploaded_file($temp_image2, "all_images/" . $image2);
    move_uploaded_file($temp_image3, "all_images/" . $image3);

    // SQL query to insert data into the table
    $sql = "INSERT INTO `project_management`(`project_description`, `project_name`, `location`, `year`, `image1`, `image2`, `date`)
            VALUES ('$project_description', '$project_title', '$project_location', '$project_year', '$image1', '$image2', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully.";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }

    mysqli_close($conn); // Close the connection
}
?>
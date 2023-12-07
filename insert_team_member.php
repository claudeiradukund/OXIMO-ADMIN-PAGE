<?php
  include('config/dbcon.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">OUR TEAM MEMBER</li>
    </ol>
    <!----- stating of inserting master planning projects -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Team Member</h1>
       <!-- form -->
       <form action="" method="POST"  enctype="multipart/form-data">
           <!-- title -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="enter your title" autocomplete="off" required="required">
           </div>
           <!-- Education Degree -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="education_degree" class="form-label">Education Degree</label>
              <input type="text" name="education_degree" id="title" class="form-control" placeholder="Enter Your Degree" autocomplete="off" required="required">
           </div> 
           <!-- description -->
           <div class="inputbox">
              <span name="member_description">Member Description</span>
              <textarea name="member_description" required="required"></textarea>
           </div>         
           <!-- member image1-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="member_image" class="form-label">Member Image</label>
              <input type="file" name="member_image" id="member_image" class="form-control" required="required">
           </div>
           <!--insert button -->
           <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_member" class="btn btn-info mb-3 px-3" value="insert member">
           </div>
       </form>
    </div> 
    <!----- ending of inserting master planning projects-------->
<?php
  include('includes/footer.php');
  include('includes/scripts.php');
?>
<!---- insert data into data base ---->
<?php
if(isset($_POST['insert_member'])) {
    // Establish a connection to the database
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $title = $_POST['title'];
    $education_degree = $_POST['education_degree'];
    $description = $_POST['member_description']; // Corrected the name attribute
    $image = $_FILES['member_image']['name']; // Assuming image upload is handled properly

    // SQL query to insert data into the table
    $sql = "INSERT INTO team_member (names, degree, description, image, date) VALUES ('$title', '$education_degree', '$description', '$image', NOW())";

    // Check if the query executed successfully
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
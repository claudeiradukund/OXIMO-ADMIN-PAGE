<?php
  include('config/dbcon.php');
  include('includes/header.php');
?>

<div class="container-fluid px-4">
  <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">OUR TESTIMONIALS</li>
    </ol>
    <!----- stating of inserting master planning projects -------->
    <div class="containerr mt-3">
       <h1 class="text-center">Insert Customer Testimonials</h1>
       <!-- form -->
       <form action="" method="POST"  enctype="multipart/form-data">
           <!-- title -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="title" class="form-label">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="enter your title" autocomplete="off" required="required">
           </div>
           <!-- Education Degree -->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="education_degree" class="form-label"> Degree</label>
              <input type="text" name="education_degree" id="title" class="form-control" placeholder="Enter Your Degree" autocomplete="off" required="required">
           </div> 
           <!-- description -->
           <div class="inputbox">
              <span name="customer_testimonial">Customer Testimonials</span>
              <textarea name="customer_testimonial" required="required"></textarea>
           </div>         
           <!-- member image1-->
           <div class="form-outline mb-4 w-50 m-auto">
              <label for="member_image" class="form-label">Customer Image</label>
              <input type="file" name="customer_image" id="member_image" class="form-control" required="required">
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
<!----- inserting data into data base ---->
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "oximo";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert_member'])) {
    // Establish a connection to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $title = $_POST['title'];
    $degree = $_POST['education_degree'];
    $testimonial = $_POST['customer_testimonial']; // Assuming this is the name attribute of your textarea
    $customerImage = $_FILES['customer_image']['name']; // Assuming the file input name is 'customer_image'

    // Move uploaded file to a folder (optional)
    $targetDirectory = "uploads/"; // Change this to your desired directory
    $targetFilePath = $targetDirectory . basename($customerImage);
    move_uploaded_file($_FILES["customer_image"]["tmp_name"], $targetFilePath);

    // Prepare and execute the SQL statement for insertion
    $sql = "INSERT INTO customer_testimonials (customer_messages, customer_names, customer_title, customer_image, date)
            VALUES ('$testimonial', '$title', '$degree', '$customerImage', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

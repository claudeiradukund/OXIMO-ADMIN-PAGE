<?php
session_start();
include('../config/dbcon.php');
if (isset($_POST['register_btn'])) {
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Establish connection to the database
        $con = mysqli_connect("localhost", "root", "", "oximo");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // Escape user inputs for security
        $fname = mysqli_real_escape_string($con, $_POST['fname']);
        $lname = mysqli_real_escape_string($con, $_POST['lname']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);

        // Check if passwords match
        if ($password === $confirm_password) {
            // Check if the email already exists
            $checkemail = "SELECT `email` FROM `users` WHERE email='$email'";
            $checkemail_run = mysqli_query($con, $checkemail);

            if (mysqli_num_rows($checkemail_run) > 0) {
                // Email already exists
                $_SESSION['message'] = "Email already exists";
                header("location: register.php");
                exit();
            } else {
                // Hash the password before storing it in the database
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Prepare and execute the query to insert user data
                $user_query = "INSERT INTO `users`(`Firstname`, `Lastname`, `email`, `Password`, `role_as`, `status`, `Datecreated`) VALUES ('$fname','$fname','$email','$password ','role_value','active',NOW())";
                $user_query_run = mysqli_query($con, $user_query);

                if ($user_query_run) {
                    $_SESSION['message'] = "Registered successfully";
                    header("location: login.php");
                    exit();
                } else {
                    $_SESSION['message'] = "Something went wrong!";
                    header("location: register.php");
                    exit();
                }
            }
        } else {
            // Passwords do not match
            $_SESSION['message'] = "Password and confirm password do not match";
            header("location: register.php");
            exit();
        }
    } else {
        // If not a POST request, redirect to the registration page
        header("location: register.php");
        exit();
    }
}
?>

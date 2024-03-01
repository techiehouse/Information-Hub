<?php
// Define the valid username and password
$valid_username = "User";
$valid_password = "Passcode";

// Retrieve the submitted username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials match the valid credentials
if ($username === $valid_username && $password === $valid_password) {
    // Successful login
    echo '<script type="text/javascript">
       alert("Login Successful! Please enter the candidate details.");
       window.location = "dataEntry.php";
    </script>';
    // Redirect to a welcome page or perform other actions here
} else {
    // Failed login
    // header("location:index.php");

    echo '<script type="text/javascript">
       alert("Invalid username or password. Please try again.");
       window.location = "index.php";
    </script>';
    // Redirect back to the login page or display an error message
}
?>

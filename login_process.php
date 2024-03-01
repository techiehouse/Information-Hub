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
    echo "Login successful. Welcome, $username!";
    // Redirect to a welcome page or perform other actions here
} else {
    // Failed login
    echo "Invalid username or password. Please try again.";
    // Redirect back to the login page or display an error message
}
?>

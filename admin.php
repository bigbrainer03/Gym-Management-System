<?php
session_start();

// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Get the submitted username and password
    $username = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['pass']);

    // Validate the login 
    if($username == 'admin' && $password == 'admin123') {
        // Authentication successful, set a session variable
        $_SESSION['name'] = $username;

        // Redirect to a different file
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed, set an error message
        $_SESSION['error_message'] = "Invalid username or password";

        // Redirect back to the login page 
        header("Location: admin-login.php");
        exit();
    }
}
?>

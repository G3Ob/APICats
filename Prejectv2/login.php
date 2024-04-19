<?php
// Start a session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (you would replace this with your authentication logic)
    if ($username === "admin" && $password === "adminpassword") {
        // Authentication successful
        // Store the username in the session
        $_SESSION['username'] = $username;

        // Redirect to the admin panel
        header("Location: admin-panel.php");
        exit();
    } else {
        // Authentication failed
        // Redirect back to the login page with an error message
        header("Location: cat-facts-admin.html?error=1");
        exit();
    }
}
?>

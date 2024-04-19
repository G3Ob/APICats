<?php
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials are valid (replace with your authentication logic)
    if ($username === "admin" && $password === "adminpassword") {
        // Authentication successful
        // Store the username in the session
        $_SESSION['username'] = $username;
        // Redirect to the admin panel
        header("Location: admin-panel.php");
        exit();
    } else {
        // Authentication failed
        $error = "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Admin Login</h1>
  </header>
  <div class="container">
    <form id="adminLoginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="username">Username:</label><br>
      <input type="text" id="username" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" id="password" name="password"><br>
      <input type="submit" value="Login">
      <p style="color: red;"><?php if(isset($error)) echo $error; ?></p>
    </form>
  </div>
  <footer>
    <p>&copy; 2024 Cat Facts</p>
  </footer>
</body>
</html>

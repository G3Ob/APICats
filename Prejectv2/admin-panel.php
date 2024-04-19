<?php
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: cat-facts-admin.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cat Facts Admin Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Cat Facts Admin Panel</h1>
  </header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="cat-facts.html">Cat Facts</a></li>
      <li><a href="cat-facts-form.html">Cat Facts Form</a></li>
      <li><a href="cat-facts-admin.html">Cat Facts Admin</a></li>
    </ul>
  </nav>
  <section id="adminContainer">
    <!-- Admin panel content will be displayed here -->
    <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
  </section>
  <footer>
    <p>&copy; 2024 Cat Facts</p>
  </footer>
</body>
</html>

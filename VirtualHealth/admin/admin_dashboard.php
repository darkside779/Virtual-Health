<?php
session_start();

// Check if the admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// Display the admin dashboard content
echo "Welcome to the admin dashboard, " . $_SESSION['admin_name'] . "!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Welcome, <?php echo $_SESSION['admin_name']; ?>!</p>

    <!-- Dashboard content goes here -->
    <a href="logout.php">Logout</a>
</body>
</html>

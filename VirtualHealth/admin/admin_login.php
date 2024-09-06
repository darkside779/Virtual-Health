<?php
session_start();
$error = "";

// Include the database connection file
include("connect.php");

if (isset($_POST['signIn'])) {
    $email = filter_var($_POST['aemail'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['apass'];

    // Prepare the query to check the email and password
    $sql = "SELECT * FROM admin WHERE aemail = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['apass'])) {
            // Set session variables for the logged-in admin
            $_SESSION['admin_id'] = $row['aid'];
            $_SESSION['admin_name'] = $row['aname'];
            header("Location: admin_dashboard.php");
            exit();
        } else {
            $error = "Incorrect Email or Password";
        }
    } else {
        $error = "Incorrect Email or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="images/Home-logo2.jpg">
    <title>Admin Login</title>
</head>
<body>
    <h1>Admin Login</h1>
    
    <form method="post">
        <label for="aemail">Email:</label>
        <input type="email" id="aemail" name="aemail" placeholder="Enter Your Email" required>

        <label for="apass">Password:</label>
        <input type="password" id="apass" name="apass" placeholder="Enter Your Password" required>

        <button name="signIn" type="submit">Login</button>

        <?php if (!empty($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>

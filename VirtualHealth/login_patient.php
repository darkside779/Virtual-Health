<?php
session_start();
$error = "";

// Include the database connection file
include 'connect.php';

// Ensure the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signIn'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Prepare the query to check the email and password
    $sql = "SELECT * FROM patients WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header("Location: patient_homepage.php");
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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="images/Home-logo2.jpg">
    <title>Patient Login</title>
</head>
<body>
    <h1>Patient Login</h1>
    
    <form method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password" required>

        <button class="btn btn-success" name="signIn" value="Login" type="submit">Login</button>

        <?php if (!empty($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>

    <div class="login-or">
        <span class="or-line"></span>
        <span class="span-or">or</span>
    </div>

    <div class="social-login">
        <span>Login with</span>
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="google"><i class="fab fa-google"></i></a>
        <a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google"><i class="fab fa-instagram"></i></a>
    </div>

    <div class="text-center dont-have">Don't have an account? <a href="register_patient.php">Register</a></div>
</body>
</html>

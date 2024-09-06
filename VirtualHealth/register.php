<?php
session_start();
$error = "";
$msg = "";

// Include the database connection file
include 'connect.php';

// Make sure the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signUp'])) {
    $firstName = filter_var($_POST['fName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Hash the password using password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the query to check if the email exists
    $checkEmailQuery = "SELECT * FROM patients WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists !";
    } else {
        // Prepare the insert query
        $insertQuery = "INSERT INTO patients (firstName, lastName, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Insert was successful, redirect to index.php
            header("location:index.php");
            exit();
        } else {
            // Insert failed, display error message
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
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
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Not Found, Incorrect Email or Password";
        }
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="images/Home-logo2.jpg">
    <title>register</title>
</head>
<body><h1>Register as Patient</h1>
<form method="post">
    <label for="firstName">First Name:</label>
    <input type="text" id="pfname" name="fName" placeholder="Enter First name" required>
    <label for="LastName">Last Name:</label>
    <input type="text" id="plname" name="lName" placeholder="Enter Last name" required>
    <label for="peamil">Email:</label>
    <input type="email" id="peamil" name="email" placeholder="Enter Your Email" required>
    <label for="password">password:</label>
    <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
    <button class="btn btn-success" name="signUp" value="Register" type="submit">Register</button>
</form>
<div class="login-or">
    <span class="or-line"></span>
	<span class="span-or">or</span>
</div>							
<!-- Social Login -->
    <div class="social-login">
        <span>Register with</span>
			<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
    		<a href="#" class="google"><i class="fab fa-google"></i></a>
			<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
			<a href="#" class="google"><i class="fab fa-instagram"></i></a>
	</div> 
<!-- /Social Login -->
								
	<div class="text-center dont-have">Already have an account? <a href="P-R.html">Login</a></div>
								
</body>
</html>
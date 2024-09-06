<?php
session_start();
$error = "";
$msg = "";

// Include the database connection file
include 'connect.php';

// Ensure the database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['signUp'])) {
    $firstName = filter_var($_POST['fName'], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $specialization = filter_var($_POST['specialization'], FILTER_SANITIZE_STRING);
    $docInfo = filter_var($_POST['doc_info'], FILTER_SANITIZE_STRING);

    // Image handling
    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $image_path = 'uploads/' . $image;

    // Hash the password using password_hash()
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM doctors WHERE email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Prepare the insert query
        $insertQuery = "INSERT INTO doctors (first_name, last_name, email, password, specialization, image_path, doc_info, created_at) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssssss", $firstName, $lastName, $email, $hashedPassword, $specialization, $image_path, $docInfo);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Move the uploaded file to the destination folder
            move_uploaded_file($temp_name, $image_path);

            // Redirect to index.php after successful registration
            header("location:index.php");
            exit();
        } else {
            // Display error message if the insertion fails
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the query to check the email and password
    $sql = "SELECT * FROM doctors WHERE email = ?";
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
            echo "Incorrect Email or Password";
        }
    } else {
        echo "Incorrect Email or Password";
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
    <title>Doctor Registration</title>
</head>

<?php include("include/header.php");?>

<body>
    <h1>Register as Doctor</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="firstName">First Name:</label>
        <input type="text" id="pfname" name="fName" placeholder="Enter First name*" required>
        
        <label for="LastName">Last Name:</label>
        <input type="text" id="plname" name="lName" placeholder="Enter Last name*" required>

        <label for="peamil">Email:</label>
        <input type="email" id="peamil" name="email" placeholder="Enter Your Email*" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password*" required>

        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" placeholder="Enter Specialization*" required>

        <label for="docInfo">Doctor Info:</label>
        <textarea id="docInfo" name="doc_info" placeholder="Enter Doctor Info*" required></textarea>

        <label for="image">Doctor Image*:</label>
        <input type="file" id="image" name="image" required>

        <button class="btn btn-success" name="signUp" value="Register" type="submit">Register</button>
    </form>
    
    <div class="login-or">
        <span class="or-line"></span>
        <span class="span-or">or</span>
    </div>

    <div class="social-login">
        <span>Register with</span>
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="google"><i class="fab fa-google"></i></a>
        <a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google"><i class="fab fa-instagram"></i></a>
    </div>

    <div class="text-center dont-have">Already have an account? <a href="P-R.html">Login</a></div>
</body>
</html>

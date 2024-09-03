<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 5%;
            background-color: #91f2d8;
        }
        .button {
            font-size: 20px;
            padding: 10px 20px;
            margin: 10px; 
            color: white;
            background-color: #06d09a;
            color: black;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #026349
        }
        /* Specializations section */
        .specializations {
            margin-top: 20px;
        }
        .specialization-item {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px 0;
            cursor: pointer;
        }
        .specialization-color {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- النص الترحيبي -->
    <div>
        <p style="font-size: 50px; font-weight: bold;">
            Hello <?php 
            if(isset($_SESSION['email'])){
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT patients.* FROM patients WHERE patients.email='$email'");
                while($row = mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
            ?>
            :)
        </p>
    </div>

    <!-- قسم التخصصات -->
    <div class="specializations">
    <h3>Choose a Specialization:</h3>
    <div class="specialization-item" onclick="selectSpecialization('Internal medicine', 'yellow')">
        <div class="specialization-color" style="background-color: yellow;"></div>
        <span>Internal medicine</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Gynecology', 'black')">
        <div class="specialization-color" style="background-color: black;"></div>
        <span>Gynecology</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Cardiology', 'red')">
        <div class="specialization-color" style="background-color: red;"></div>
        <span>Cardiology</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Pediatrics', 'purple')">
        <div class="specialization-color" style="background-color: purple;"></div>
        <span>Pediatrics</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Psychiatry', 'coral')">
        <div class="specialization-color" style="background-color: coral;"></div>
        <span>Psychiatry</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Dermatology', 'green')">
        <div class="specialization-color" style="background-color: green;"></div>
        <span>Dermatology</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Opthalmology', 'brown')">
        <div class="specialization-color" style="background-color: brown;"></div>
        <span>Opthalmology</span>
    </div>
    <div class="specialization-item" onclick="selectSpecialization('Dentistry', 'blue')">
        <div class="specialization-color" style="background-color: blue;"></div>
        <span>Dentistry</span>
    </div>
    <!-- أضف المزيد من التخصصات هنا -->
</div>

    <!-- أزرار تسجيل الدخول والخروج -->
    <div>
        <button class="button" id="loginBtn">Login</button>
        <a href="logout.php" class="button">Logout</a> 
    </div>

    <script>
        let selectedSpecialization = '';
        let selectedColor = '';

        function selectSpecialization(specialization, color) {
            selectedSpecialization = specialization;
            selectedColor = color;
            alert('You selected ' + specialization + ' with color ' + color);
        }

        document.getElementById('loginBtn').addEventListener('click', function() {
            if(selectedSpecialization === '') {
                alert('Please select a specialization before logging in.');
            } else {
                sessionStorage.setItem('specialization', selectedSpecialization);
                sessionStorage.setItem('specializationColor', selectedColor);
                window.location.href = '/VirtualHealth/ChatForum.html'; // توجيه إلى صفحة الشات
            }
        });
    </script>
</body>
</html>
<?php
session_start();

// Check if the doctor is logged in
if (!isset($_SESSION['doctor_id'])) {
    header("Location: login.php");
    exit();
}

// Access doctor name from the session
$doctorName = isset($_SESSION['doctor_name']) ? $_SESSION['doctor_name'] : 'Doctor';

echo "Welcome to your dashboard, " . htmlspecialchars($doctorName) . "!";

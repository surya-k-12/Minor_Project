<?php
session_start();

// Predefined admin credentials
define('ADMIN_USERNAME', 'admin');
define('ADMIN_PASSWORD', 'admin2024');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the entered credentials match the predefined credentials
    if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: adminhomepage.php'); // Redirect to admin dashboard
        exit();
    } else {
        echo '<script>alert("Invalid username or password");</script>';
    }
}
?>
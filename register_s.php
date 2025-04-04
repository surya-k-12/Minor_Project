<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    
    $conn = new mysqli("localhost", "root", "", "applications");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password for security
   
    $status = 'pending';

    // INSERT statement
    $query = "INSERT INTO register (Name_of_company, Email, Linkedin, Password, Status) VALUES ('$name', '$email', '$linkedin', '$password', '$status')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Registration successful. Awaiting admin approval.";
    } else {
        echo "Failed to register: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <a href="recruiter_login.html" style="color:red">Back to login page</a>
</body>
</html>

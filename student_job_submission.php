<?php
$servername = "localhost";  // Replace with your database server
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "applications";   // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_title = $_POST['jobTitle'];
    $company_name = $_POST['Companyname'];
    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $registration_number = $_POST['regno'];
    $year_of_study = $_POST['year'];
    $branch = $_POST['branch'];
    $graduation = $_POST['graduation'];
    $cgpa = $_POST['cgpa'];
    $batch_year = $_POST['byear'];
    $skills = $_POST['skills'];

    $sql = "INSERT INTO job_applications (jobTitle, companyname, name, email, regno, year, branch, graduation, cgpa, byear, skills, approval_status)
    VALUES ('$job_title', '$company_name', '$full_name', '$email', '$registration_number', '$year_of_study', '$branch', '$graduation', '$cgpa', '$batch_year', '$skills', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        echo "Applied successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span> <br>
    <br>
    <a href="sthomepage.html">Back To Home Page</a></span>
   
</body>
</html>

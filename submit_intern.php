<?php
session_start();

// Ensure the user is logged in and has a company name
if (!isset($_SESSION['email']) || !isset($_SESSION['company_name'])) {
    die("You need to log in first.");
}

$conn = new mysqli('localhost', 'root', '', 'recruiter');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Companyname = mysqli_real_escape_string($conn, $_POST['Companyname']);
    $jobTitle = mysqli_real_escape_string($conn, $_POST['jobTitle']);
   
    $deadline = mysqli_real_escape_string($conn, $_POST['deadline']);
    $year = implode(', ', $_POST['year']); // Convert array to comma-separated string
    $department = implode(', ', $_POST['department']); // Convert array to comma-separated string
    $skillsRequired = mysqli_real_escape_string($conn, $_POST['skillsRequired']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $package = mysqli_real_escape_string($conn, $_POST['package']);

    // Check if the deadline has passed
    $currentDate = date('Y-m-d'); // Current date in YYYY-MM-DD format
    if ($currentDate > $deadline) {
        die("The deadline for this internship has passed. The form cannot be submitted.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO internships ( Title,Companyname, deadline, year_of_study, department, skills_required, location, stipend) VALUES ( ' $jobTitle','$Companyname',' $deadline', '$year', '$department', '$skillsRequired', '$location', '$package')");
    

    // Execute the statement
    if ($stmt->execute()) {
        header('Location: recruiter_dashboard.php?section=approvals');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<?php
$conn = new mysqli('localhost', 'root', '', 'recruiter');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize input
    $Companyname = mysqli_real_escape_string($conn, $_POST['Companyname']);
    $jobTitle = mysqli_real_escape_string($conn, $_POST['jobTitle']);
    $jobDescription = mysqli_real_escape_string($conn, $_POST['jobDescription']);
    $department = implode(', ', $_POST['department']); // Convert array to comma-separated string
    $skillsRequired = mysqli_real_escape_string($conn, $_POST['skillsRequired']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $package = mysqli_real_escape_string($conn, $_POST['package']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO jobs (Companyname, jobTitle, jobDescription, department, skills_required, location, package) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Companyname, $jobTitle, $jobDescription, $department, $skillsRequired, $location, $package);

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

<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruiter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

// Get company name from query parameter (assumed to be passed in GET request)
$companyName = isset($_GET['company']) ? $conn->real_escape_string($_GET['company']) : '';

// Validate company name
if (empty($companyName)) {
    echo json_encode(['error' => 'Company name is required']);
    $conn->close();
    exit();
}

// Prepare and execute SQL statement
$sql = "SELECT jobTitle, Companyname FROM jobs WHERE company_name = $companyName";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $companyName);
$stmt->execute();
$result = $stmt->get_result();

$jobDetails = [];
if ($result->num_rows > 0) {
    $jobDetails = $result->fetch_assoc();
} else {
    $jobDetails = ['error' => 'No job details found for this company'];
}

echo json_encode($jobDetails);

$stmt->close();
$conn->close();
?>

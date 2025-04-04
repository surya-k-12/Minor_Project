<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "test"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM sprofile WHERE id = $user_id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <header>
        <h1>Student Profile</h1>
    </header>
    <main>
        <section id="profile-display">
            <h2>Profile Information</h2>
            <?php if ($student): ?>
                <div class="student-info">
                    <p><strong>First Name:</strong> <?php echo $student['firstname']; ?></p>
                    <p><strong>Last Name:</strong> <?php echo $student['lastname']; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $student['dob']; ?></p>
                    <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
                    <p><strong>Phone Number:</strong> <?php echo $student['phone']; ?></p>
                    <p><strong>Address:</strong> <?php echo $student['address']; ?></p>
                </div>
               
            <?php else: ?>
                <p>No profile information available.</p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
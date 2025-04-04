<?php
// Establish database connection
$conn = new mysqli('localhost', 'root', '', 'recruiter');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if jobId is set
if (isset($_POST['jobId'])) {
    $jobId = $_POST['jobId'];

    // Query to fetch job details
    $sql = "SELECT jobTitle FROM jobs WHERE job_id = $jobId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Apply for Job</title>
            <link rel="stylesheet" href="student_job_display.css"> <!-- Link to your CSS file -->
        </head>
        <body>
        <div class="container">
            <h1>Apply for <?php echo $row['jobTitle']; ?></h1>
            <form action="submit_application.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="jobId" value="<?php echo $jobId; ?>">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="resume">Resume:</label>
                <input type="file" id="resume" name="resume" required>
                
                <button type="submit" name="submit">Submit Application</button>
            </form>
        </div>
        </body>
        </html>
        <?php
    } else {
        echo "Job not found.";
    }
} else {
    echo "Invalid job.";
}

// Close database connection
$conn->close();
?>

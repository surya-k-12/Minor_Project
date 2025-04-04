<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Job Page</title>
    <link rel="stylesheet" href="student_job_display.css"> <!-- Link to your CSS file -->
</head>
<body>

<div class="container">
    <h1>Available Jobs</h1>
 <?php
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'recruiter');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch job details
    $sql = "SELECT * FROM jobs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="job-listing">
                <h2><?php echo $row['jobTitle']; ?></h2>
                <p><strong>Companyname:</strong> <?php echo $row['Companyname']; ?></p>
                <p><strong>JobDescription:</strong> <?php echo $row['jobDescription']; ?></p>
                <p><strong>Department:</strong> <?php echo $row['department']; ?></p>
                <p><strong>Skills Required:</strong> <?php echo $row['skills_required']; ?></p>
                <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
                <p><strong>Package:</strong> <?php echo $row['package']; ?></p>

                <!-- Apply Button -->
                <form class="apply-form" action="student_job_appliaction.php" method="post">
                    <input type="hidden" name="jobId" value="<?php echo $row['job_id']; ?>">
                    <button type="submit" name="apply"><a href="student_job_application.php">Apply</a></button>
                </form>
            </div>
            <?php
        }
    } else {
        echo "<p>No jobs found.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
</div>

</body>
</html>

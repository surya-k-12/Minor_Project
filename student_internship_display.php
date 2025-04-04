<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Internship Page</title>
    <link rel="stylesheet" href="student_internship.css"> <!-- Link to your CSS file -->
</head>
<body>

<div class="container">
    <h1>Available Internships</h1>

    <?php
    // Establish database connection
    $conn = new mysqli('localhost', 'root', '', 'recruiter');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch internship details
    $sql = "SELECT * FROM internships";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="internship-listing">
                <h2><?php echo $row['Title']; ?></h2>
                <p><strong>Company Name:</strong> <?php echo $row['Companyname']; ?></p>
                <p><strong>Year of Study:</strong> <?php echo $row['year_of_study']; ?></p>
                <p><strong>Department:</strong> <?php echo $row['department']; ?></p>
                <p><strong>Skills Required:</strong> <?php echo $row['skills_required']; ?></p>
                <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
                <p><strong>Stipend:</strong> <?php echo $row['stipend']; ?></p>
                <p><strong>Deadline:</strong> <?php echo $row['deadline']; ?></p>

                <!-- Apply Button -->
                <form class="apply-form" action="apply_internship.php" method="post">
                    <input type="hidden" name="internshipId" value="<?php echo $row['intern_id']; ?>">
                    <button type="submit" name="apply"><a href="student_internship_apply.php">Apply</a></button>
                </form>
            </div>
            <?php
        }
    } else {
        echo "<p>No internships found.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
</div>

</body>
</html>

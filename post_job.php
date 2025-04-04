<?php
session_start();

// Ensure the user is logged in and has a company name
if (!isset($_SESSION['email']) || !isset($_SESSION['company_name'])) {
    die("You need to log in first.");
}

$company_name = $_SESSION['company_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post_job.css">
    <title>Post a Job</title>
</head>
<body>
<h1>Post a Job</h1>
<form action="submit_job.php" method="POST">
    <label for="Companyname"><strong>Company Name:</strong></label>
    <input id="Companyname" name="Companyname" value="<?php echo htmlspecialchars($company_name); ?>" readonly required>

    <label for="jobTitle"><strong>Job Title:</strong></label>
    <input type="text" id="jobTitle" name="jobTitle" required>

    <label for="jobDescription"><strong>Job Description:</strong></label>
    <textarea id="jobDescription" name="jobDescription" required></textarea>

    <label><strong>Department:</strong></label>
    <div>
    <label><input type="checkbox" name="department[]" value="CSE"> CSE</label>
        <label><input type="checkbox" name="department[]" value="ECE"> ECE</label>
        <label><input type="checkbox" name="department[]" value="ME"> Mech</label>
        <label><input type="checkbox" name="department[]" value="CE"> Civil</label>
        <label><input type="checkbox" name="department[]" value="EE"> EEE</label>
        <label><input type="checkbox" name="department[]" value="CSE"> Chemical</label>
    </div>

    <label for="skillsRequired"><strong>Skills Required:</strong></label>
    <input type="text" id="skillsRequired" name="skillsRequired" required>

    <label for="location"><strong>Location:</strong></label>
    <input type="text" id="location" name="location" required>

    <label for="package"><strong>Package:</strong></label>
    <input type="text" id="package" name="package" required>

    <button type="submit">Post Job</button>
</form>
</body>
</html>

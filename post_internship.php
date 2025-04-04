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
    <link rel="stylesheet" href="post_internship.css">
    <title>Post Internship</title>
</head>
<body>
<h1>Internship</h1>
<form action="submit_intern.php" method="POST">
    <label for="jobTitle"><strong>Title:</strong></label>
    <input type="text" id="jobTitle" name="jobTitle" required>

    <label for="Companyname"><strong>Company Name:</strong></label>
    <input id="Companyname" name="Companyname" value="<?php echo htmlspecialchars($company_name); ?>" readonly required>

    <label for="deadline"><strong>Deadline:</strong></label>
    <input type="date" id="deadline" name="deadline" required><br>

    <label><strong>Year of Study:</strong></label>
    <div>
        <label><input type="checkbox" name="year[]" value="1st"> 1st Year</label>
        <label><input type="checkbox" name="year[]" value="2nd"> 2nd Year</label>
        <label><input type="checkbox" name="year[]" value="3rd"> 3rd Year</label>
        <label><input type="checkbox" name="year[]" value="4th"> 4th Year</label>
        <label><input type="checkbox" name="year[]" value="MTech"> MTech</label>
    </div>

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

    <label for="package"><strong>Stipend:</strong></label>
    <input type="text" id="package" name="package" required>

    <button type="submit">Post Internship</button>
</form>
</body>
</html>

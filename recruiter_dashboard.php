<?php
session_start();
if (!isset($_SESSION['recruiter_id'])) {
    header("Location: recruiter_login.html");
    exit();
}
$company_name = $_SESSION['company_name'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_dashboard.css">
    <title>Recruiter Dashboard</title>
</head>
<body>
    
<header>
    <h1>Welcome, <?php echo htmlspecialchars($company_name); ?>!</h1>  
</header>
<main>
    <div class="container">
        <div class="login-section">
            <div class="login-box">
                <h2>Post Job</h2>
                <a href="post_job.php" class="login-button">ADD</a>
            </div>
            <div class="login-box">
                <h2>Post Internship</h2>
                <a href="post_internship.php" class="login-button">ADD</a>
            </div>
            <div class="login-box">
                <h2>Approvals</h2>
                <a href="recruiter_approval.php" class="login-button">Jobs</a>
                <a href="recruiter_approval_internship.php" class="login-button">Internships</a>
            </div>
        </div>
        <a href="home.php" class="logout-button">Logout</a>
    </div>
</main>
</body>
</html>

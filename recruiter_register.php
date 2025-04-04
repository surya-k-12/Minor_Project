

<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Registration Form</title>
    <link rel="stylesheet" href="style_register.css">
</head>
<body>
    <div class="container">
        <form action="register_s.php" id="registrationForm" method="POST">
            <h2><b>Recruiter Registration</b></h2>
            <div class="form-control">
                <label for="name">Name of Company</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-control">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-control">
            <label for="linkedin">LinkedIn Profile URL:</label>
            <input type="url" id="linkedin" name="linkedin" placeholder="https://www.linkedin.com/in/yourprofile" required>
            </div>
            
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-control">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-control">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </div>
</body>
</html>


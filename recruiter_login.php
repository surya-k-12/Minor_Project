<?php
session_start();
$conn=new mysqli("localhost","root","","applications");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Fetch user data
    $query = "SELECT * FROM register WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Check if the recruiter is accepted
        if ($user['Status'] == 'accepted') {
            $_SESSION['email'] = $email;
            $_SESSION['status'] = $user['Status'];
            $_SESSION['company_name'] = $user['Name_of_company'];
            $_SESSION['recruiter_id'] = $user['register_id'];
           

            // Redirect to the recruiter dashboard
            header("Location: recruiter_dashboard.php");
            exit();
        } else {
            echo "Your account is not yet approved by the admin.";
        }
    } else {
        echo "Invalid email or password.";
    }

    mysqli_close($conn);
}
?>

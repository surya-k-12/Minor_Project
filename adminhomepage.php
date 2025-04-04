<?php 
$conn=new mysqli("localhost","root","","applications");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="adminhomepage.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Admin Home Page</h1>
        </header>
        
        <nav>
            <ul>
                <li><a href="adminreg.php">Student Registrations</a></li>
                <li><a href="student_job_retrival.php">Student Job Applications</a></li>
                <li><a href="student_internship_retrival.php">Student Internship Applications</a></li>
                <li><a href="recruiter_retrival.php">Present Recruiting Companies</a></li>
                <li><a href="past.php">Past Recruitements</a></li>
                <li><a href="up.php">Upcoming Events</a></li>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </nav>
        <div class="container">
           <h2>Recruiter Approvals</h2>
            <table>
                <thead>
                    <tr>
                        
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>LinkedIN profile ID </th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM register WHERE status='pending'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                   
                                    <td>{$row['Name_of_company']}</td>
                                    <td>{$row['Email']}</td>
                                    <td>{$row['Linkedin']}</td>
                                    <td>{$row['Status']}</td>
                                    <td>
                                        <a href='update_status.php?id={$row['register_id']}&status=accepted'>Accept</a> |
                                        <a href='update_status.php?id={$row['register_id']}&status=rejected'>Reject</a>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No pending registrations</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
       
        
        <footer>
            <p>&copy; 2024 Placement Cell Management</p>
        </footer>
    </div>
</body>
</html>
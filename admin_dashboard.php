<?php 
$conn=new mysqli("localhost","root","","recruiter");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style_dashboard.css">
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <table>
            <thead>
                <tr>
                    
                    <th>Company Name</th>
                    <th>Email</th>
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
</body>
</html>

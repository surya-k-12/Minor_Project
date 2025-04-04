<?php
session_start();
include('server.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['company_name']) ) {
    header("Location: recruiter_login.html");
    exit();
}

$company_name = $_SESSION['company_name'];

// Fetch job applications for the specific company
$query = "SELECT * FROM job_applications WHERE companyname='$company_name'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($company_name); ?></h2>
    <h3>Job Applications</h3>

    <table>
        <tr>
            <th>Job Title</th>
            <th>Company Name</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Registration Number</th>
            <th>Year of Study</th>
            <th>Branch</th>
            <th>Graduation</th>
            <th>CGPA</th>
            <th>Batch Year</th>
            <th>Skills</th>
            <th>Approval Status</th>
            <th>Action</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['jobTitle']}</td>
                    <td>{$row['companyname']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['regno']}</td>
                    <td>{$row['year']}</td>
                    <td>{$row['branch']}</td>
                    <td>{$row['graduation']}</td>
                    <td>{$row['cgpa']}</td>
                    <td>{$row['byear']}</td>
                    <td>{$row['skills']}</td>
                    <td>{$row['approval_status']}</td>
                    <td>
                        <form action='up_recruiter.php' method='POST'>
                            <input type='hidden' name='application_id' value='{$row['id']}'>
                            <select name='status'>
                                <option value='Pending' " . ($row['approval_status'] == 'Pending' ? 'selected' : '') . ">Pending</option>
                                <option value='Accepted' " . ($row['approval_status'] == 'Accepted' ? 'selected' : '') . ">Accepted</option>
                                <option value='Rejected' " . ($row['approval_status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
                            </select>
                            <button type='submit'>Update</button>
                        </form>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='13'>No job applications found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php mysqli_close($conn); ?>
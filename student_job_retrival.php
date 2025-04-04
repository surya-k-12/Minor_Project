<?php
$servername = "localhost";  // Replace with your database server
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "applications";   // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT jobTitle, companyname, name, email, regno, year, branch, graduation, cgpa, byear, skills,approval_status FROM job_applications";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applications</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Job Applications</h2>
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
        <th>Approval_status</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
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

                  </tr>";
        }
    } else {
        echo "<tr><td colspan='11'>No applications found</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>

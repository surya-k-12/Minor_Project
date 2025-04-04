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

$sql = "SELECT Name_of_company,Email ,Linkedin FROM register";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiting Companies List</title>
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

<h2>Present Recruiting Companies</h2>
<table>
    <thead>
        <tr>
        <th> Name Of Company</th>
        <th>Email</th>
        <th>Linkedin profile ID</th>

        </tr>
       
    </thead>
    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Name_of_company']}</td>
                    <td>{$row['Email']}</td>
                     <td>{$row['Linkedin']}</td>
                    
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

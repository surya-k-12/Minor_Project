<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placementdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Year,Name_of_std, Reg_no,Program,Company,CTC FROM placement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Year"]. "</td><td>" . $row["Name_of_std"]. "</td><td>" . $row["Reg_no"]. "</td><td>" . $row["Program"]. "</td><td>" . $row["Company"]. "</td><td>" . $row["CTC"]. "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
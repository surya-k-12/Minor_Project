<?php
$conn=new mysqli("localhost","root","","applications");

if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $status = mysqli_real_escape_string($conn, $_GET['status']);

    // Update the status in the database
    $query = "UPDATE register SET status='$status' WHERE register_id='$id'";
    if (mysqli_query($conn, $query)) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }

    // Redirect back to admin dashboard
   
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body style="margin: 50px;">
    <h1>List Of Students Registered</h1><br>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Address</th>
                <th>Action</th>
               
    
            </tr>
        </thead>

        <tbody>
            <?php
            include 'connt.php';

            $sql = "SELECT * FROM sprofile";
            $result = $conn -> query($sql);

            if(!$result){
                die("Invalid query:" .$conn->error);
            }
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["firstname"] . "</td>
                <td>" . $row["lastname"] . "</td>
                <td>" . $row["dob"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["address"] . "</td>
                <td>
                   <a class ='btn btn-primary btn-sm' href='update'>Add</a>
                   <a class ='btn btn-danger btn-sm' href='delete'>Delete</a>
                   
                </td>
                
            </tr>";
  
            }
           
            ?>
        </tbody>
    </table>


</body>
</html>
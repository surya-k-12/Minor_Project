<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <link rel="stylesheet" href="up.css">
</head>
<body>
    <header>
        <h1>Upcoming Events</h1>
    </header>
    <main>
        <?php
        $servername = "localhost"; // Your database server
        $username = "root"; // Your database username
        $password = ""; // Your database password
        $dbname = "test"; // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $upcomingevents= $_POST['upcomingevents'];
           
            $date = $_POST['date'];
           
            $sql = "INSERT INTO updata (upcomingevents,date) 
                    VALUES ('$upcomingevents', '$date')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $sql = "SELECT * FROM updata ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);
        $student = $result->fetch_assoc();
        $conn->close();
        ?>

        <section id="profile-display">
            <h2>Upcoming Events</h2>
            <?php if ($student): ?>
                <div class="student-info">
                    <p><strong>Upcomig Events:</strong> <?php echo $student['upcomingevents']; ?></p>
                   
                    <p><strong>Date:</strong> <?php echo $student['date']; ?></p>
                   
                </div>
            <?php else: ?>
                <p>No Event available.</p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
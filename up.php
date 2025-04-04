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
        <div class="apply-box">
        <section id="profile">
           
            <h2 >Add Upcoming Events</h2>
            
            <form action="up1.php" method="post">
                <div class="form-group">
                    <label for="upcomingevents">Upcoming Events:</label>
                    <input type="text" id="upcomingevents" name="upcomingevents" required>
                </div>
               
                <div class="form-group">
                    <label for="date"> Date:</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <button type="submit"><a href="up1.php">Add</a></button>
            </form>
        </section>
        </div>

    
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Past Recruitments</title>
    <link rel="stylesheet" href="past.css">
</head>
<body>
    <h1>Past Year Recruitments</h1>
    <input type="text" id="filterInput" onkeyup="filterTable()" placeholder="Search for names..">

    <table id="dataTable">
        <thead>
            <tr>
                <th>Year</th>
                <th>Name_of_std</th>
                <th>Reg_no</th>
                <th>Program</th>
                <th>Company</th>
                <th>CTC</th>

            </tr>
        </thead>
        <tbody>
            <!-- PHP code will insert rows here -->
            <?php include 'past_data.php'; ?>
        </tbody>
    </table>

    <button onclick="addRow()">Add Row</button>

    <script src="script.js"></script>
</body>
</html>
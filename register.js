const express = require('express');
const mysql = require('mysql');
const bcrypt = require('bcrypt');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Middleware to parse incoming request bodies
app.use(bodyParser.urlencoded({ extended: true }));

// Create connection to MySQL database
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'test'
});

// Connect to MySQL database
db.connect((err) => {
    if (err) {
        console.error('Connection failed: ' + err.message);
        return;
    }
    console.log('Connected to the MySQL database.');
});

// Handle POST request for registration
app.post('/register', async (req, res) => {
    const { firstname, lastname, dob, email, phone, address, password } = req.body;

    // Hash the password using bcrypt
    const hashedPassword = await bcrypt.hash(password, 10);

    const sql = 'INSERT INTO sprofile (firstname, lastname, dob, email, phone, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)';
    const values = [firstname, lastname, dob, email, phone, address, hashedPassword];

    db.query(sql, values, (err, result) => {
        if (err) {
            console.error('Error inserting data: ' + err.message);
            return res.send('Error: ' + err.message);
        }
        res.send("Registration successful. <a href='/login.html'>Login here</a>");
    });
});

// Start server
app.listen(port, () => {
    console.log(`Server running on port ${port}`);
});

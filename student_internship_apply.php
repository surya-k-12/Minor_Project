<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Internship Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .h2{
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
       
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 100px;
        }
        .form-group button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>Internship Application Form</h2>
<form id="jobApplicationForm"  action="student_internship_submission.php" method="post">
    <div class="form-group">
        <label for="jobTitle">Internship</label>
        <input type="text" id="jobTitle" name="jobTitle" required>
        
    </div>
    <div class="form-group">
        <label for="companyname">Company Name</label>
        <input type="text" id="companyname" name="companyname" required>
      
    </div>

    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="regno">Registration Numnber</label>
        <input type="text" id="regno" name="regno" required>
    </div>
    <div class="form-group">
        <label for="year">Year Of Study</label>
        <input type="text" id="year" name="year" required>
    </div>
   <div class="form-group">
    <label for="branch">Branch</label>
    <select id="branch" name="branch" required>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="Chemical">Chemical</option>
        <option value="Civil">Civil</option>
        <option value="Mechanical">Mechanical</option>
        <option value="Metallurgy">Metallurgy</option>
    </select>
 </div>

    <div class="form-group">
        <label for="graduation">Graduation</label>
        <select id="graduation" name="graduation" required>
            <option value="UG">UG</option>
            <option value="PG">PG</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cgpa">CGPA</label>
        <input type="text" id="cgpa" name="cgpa" required>
    </div>
    <div class="form-group">
        <label for="byear">Batch(Year)</label>
        <input type="text" id="byear" name="byear" required>
    </div>
    
   
    <div class="form-group">
        <label for="skills">Your Skills</label>
        <textarea id="skills" name="skills" required></textarea>
    </div>

    <div class="form-group">
        <button type="submit"><a herf="student_internship_submission">Submit Application</a></button>
    </div>
</form>




</body>
</html>
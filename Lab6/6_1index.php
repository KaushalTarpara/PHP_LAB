<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h1>Enter Student Information</h1>
    <form method="post" action="6_1Display.php">
        <label for="name">Student Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="subject1">Subject 1 Marks:</label>
        <input type="number" name="subject1" required><br><br>

        <label for="subject2">Subject 2 Marks:</label>
        <input type="number" name="subject2" required><br><br>

        <label for="subject3">Subject 3 Marks:</label>
        <input type="number" name="subject3" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

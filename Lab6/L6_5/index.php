<!DOCTYPE html>
<html>
<head>
    <title>Student Result Form</title>
</head>
<body>
    <h1>Student Result Form</h1>
    
    <form method="post" action="process.php" enctype="multipart/form-data">
        <label for="exam_no">Exam No:</label>
        <input type="text" name="exam_no" required><br><br>

        <label for="course">Course:</label>
        <select name="course" required>
            <option value="Math">Math</option>
            <option value="Science">Science</option>
            <option value="History">History</option>
            <!-- Add more course options here -->
        </select><br><br>

        <label for="student_photo">Student Photo (JPEG, max 25KB):</label>
        <input type="file" name="student_photo" required><br><br>

        <label for="semester">Semester:</label>
        <input type="text" name="semester" required><br><br>

        <h2>Enter Marks for 5 Subjects:</h2>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo "<label for='subject{$i}'>Subject {$i}:</label>";
            echo "<input type='number' name='subject{$i}' min='0' max='100' required><br><br>";
        }
        ?>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

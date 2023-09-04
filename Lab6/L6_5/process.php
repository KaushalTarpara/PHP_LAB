<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <h1>Student Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $exam_no = $_POST["exam_no"];
        $course = $_POST["course"];
        $semester = $_POST["semester"];
        
        $uploadDir = "uploads/";
        $photoName = $_FILES["student_photo"]["name"];
        $photoTmpName = $_FILES["student_photo"]["tmp_name"];
        $photoSize = $_FILES["student_photo"]["size"];
        
        $photoPath = $uploadDir . $photoName;
        
        $allowedExtensions = array("jpg", "jpeg");
        $fileExtension = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));
        
        if (in_array($fileExtension, $allowedExtensions) && $photoSize <= 200000) {
            move_uploaded_file($photoTmpName, $photoPath);
        } else {
            echo "Invalid photo format or size. Please upload a valid JPEG image (max 2 MB).";
            exit();
        }
        
        
        $totalMarks = 0;
        for ($i = 1; $i <= 5; $i++) {
            $subject = "subject{$i}";
            $marks = $_POST[$subject];
            $totalMarks += $marks;
            echo "<p>Subject {$i}: {$marks}</p>";
        }

        
        echo "<p>Exam No: {$exam_no}</p>";
        echo "<p>Course: {$course}</p>";
        echo "<p>Semester: {$semester}</p>";
        echo "<p>Total Marks: {$totalMarks}</p>";
        echo "<img src='{$photoPath}' alt='Student Photo' width='150'><br>";

        
        echo "<hr>Today is " . date("d/m/Y") . "<br>";
        echo "The time is " . date("h:i:sa");
        
    } else {
        echo "Form not submitted.";
    }
    ?>
</body>
</html>

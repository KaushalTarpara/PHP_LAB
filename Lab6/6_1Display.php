<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h1>Student Information</h1>
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["subject1"] = $_POST["subject1"];
        $_SESSION["subject2"] = $_POST["subject2"];
        $_SESSION["subject3"] = $_POST["subject3"];
    }

    if (isset($_SESSION["name"])) {
        echo "<p>Name: {$_SESSION["name"]}</p>";
        echo "<p>Subject 1 Marks: {$_SESSION["subject1"]}</p>";
        echo "<p>Subject 2 Marks: {$_SESSION["subject2"]}</p>";
        echo "<p>Subject 3 Marks: {$_SESSION["subject3"]}</p>";
    } else {
        echo "<p>No student information found.</p>";
    }

    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>

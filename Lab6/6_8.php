<!DOCTYPE html>
<html>
<head>
    <title>Negative Number Check</title>
</head>
<body>
    <h1>Negative Number Check</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if ($number < 0) {
       
            trigger_error("Warning: The number you entered is negative.", E_USER_WARNING);
        } else {
            echo "You entered a positive number: $number";
        }
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number">Enter a Number:</label>
        <input type="number" name="number" required><br><br>
        <input type="submit" value="Check">
    </form>
   <?php
    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa")."<br>";
    ?>

</body>
</html>

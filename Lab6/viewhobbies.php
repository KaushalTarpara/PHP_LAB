<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = md5($_POST["password"]);
    $_SESSION["hobbies"] = isset($_POST["hobbies"]) ? $_POST["hobbies"] : array();
    header("Location: viewhobbies.php");
}

if (!isset($_SESSION['username'])) {
    echo "Login required.";
} else {
    echo "<h1>Welcome, {$_SESSION['username']}!</h1>";
    echo "<h2>Your Hobbies:</h2>";
    if (isset($_SESSION['hobbies']) && is_array($_SESSION['hobbies'])) {
        echo "<ul>";
        foreach ($_SESSION['hobbies'] as $hobby) {
            echo "<li>$hobby</li>";
        }
        echo "</ul>";
    } else {
        echo "You haven't selected any hobbies yet.";
    }

    echo "<a href='signout.php'>Sign Out</a>";


    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
}
?>

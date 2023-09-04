<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $users = json_decode(file_get_contents("users.json"), true);

    if (isset($users[$username]) && $users[$username]["password"] == $password) {
        $_SESSION["username"] = $username;
        header("Location: products.php");
        exit();
    } else {
        echo "Invalid username or password. <a href='index.php'>Try again</a>";
    }

   
}
?>

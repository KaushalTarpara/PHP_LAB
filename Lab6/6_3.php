<!DOCTYPE html>
<html>
<head>
    <title>File Operations</title>
</head>
<body>
    <h1>File Operations</h1>
    
    <form method="post" action="file_operations.php">
        <label for="filename">File Name:</label>
        <input type="text" name="filename" required><br><br>
        
        <label for="content">Enter Text:</label>
        <textarea name="content" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" name="write" value="Write">
        <input type="submit" name="read" value="Read">
    </form>
    <?php
    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form method="post" action="viewhobbies.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <label>Hobbies:</label><br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
        <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming<br>
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>

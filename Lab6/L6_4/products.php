<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Selection</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
    <h2>Product Selection</h2>
    
    <form method="post" action="cart.php">
        <label for="product">Select a Product:</label>
        <select name="product">
            <option value="product1">Product 1</option>
            <option value="product2">Product 2</option>
        
        </select><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required><br><br>
        
        <input type="submit" value="Add to Cart">
    </form>
    
    <a href="cart.php">View Cart</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>

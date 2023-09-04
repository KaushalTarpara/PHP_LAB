<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}


unset($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Purchase Confirmation</title>
</head>
<body>
    <h1>Thank You for Your Purchase, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>Your order has been placed successfully.</p>
    <a href="products.php">Continue Shopping</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>

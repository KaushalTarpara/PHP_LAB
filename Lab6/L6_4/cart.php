<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];
    
    // Store product and quantity in the session
    $_SESSION["cart"][$product] = $quantity;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
    <h1>Your Cart</h1>
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
        </tr>
        <?php
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $product => $quantity) {
                echo "<tr>";
                echo "<td>$product</td>";
                echo "<td>$quantity</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    
    <form method="post" action="purchase.php">
        <input type="submit" value="Buy">
    </form>
    
    <a href="products.php">Continue Shopping</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>

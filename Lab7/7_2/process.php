<?php
include 'Food.php';

$foodItems = array();
$totalSum = 0;

for ($i = 1; $i <= 3; $i++) {
    $name = $_POST["name$i"];
    $category = $_POST["category$i"];
    $price = $_POST["price$i"];
    $quantity = $_POST["quantity$i"];

    $food = new Food($name, $category, $price);
    $totalPrice = $food->order($quantity);

    $food->display();
    echo "Quantity: $quantity<br>";
    echo "Total Price: $totalPrice<br><br>";

    $totalSum += $totalPrice;
}


echo "Total Sum of All Items: $totalSum";

echo "<hr>Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");

?>

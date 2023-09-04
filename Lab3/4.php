<?php
$originalArray = array(10, 20, 30);

$paddedArray = array_pad($originalArray, 5, 0);

echo "Original Array: ";
print_r($originalArray);

echo "<br>";

echo "Padded Array: ";
print_r($paddedArray);
?>

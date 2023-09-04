<?php

$evenNumbers = range(50, 200, 2);


$average = array_sum($evenNumbers) / count($evenNumbers);


$sum = array_sum($evenNumbers);


$min = min($evenNumbers);
$max = max($evenNumbers);


print_r($evenNumbers);
echo "<br> <br>";


echo "Average: $average<br>";
echo "Sum: $sum<br>";
echo "Minimum: $min<br>";
echo "Maximum: $max<br>";
?>

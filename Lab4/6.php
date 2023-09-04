<?php

function calcOperations(...$numbers) {
    $sum = 0;
    $product = 1;
    $intCount = 0;
    $floatCount = 0;
    
    foreach ($numbers as $number) {
        $sum += $number;
        $product *= $number;
        
        if (is_int($number)) {
            $intCount++;
        } elseif (is_float($number)) {
            $floatCount++;
        }
    }
    
    echo "Sum: $sum\n";
    echo "Product: $product\n";
    echo "Count of integers: $intCount       ";
    echo "Count of floats: $floatCount\n";
}

calcOperations(5, 110, 2.5, 3, 7.5, 1);

?>

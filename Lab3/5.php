<?php
$myArray = array(10, 20, 30, 40, 50);

$searchValue = 30;

// Check if the value is present in the array
if (in_array($searchValue, $myArray)) {

    // Search for the value and print its index

    $index = array_search($searchValue, $myArray);

    echo "Value $searchValue is present at index $index.";
} 
else {
    echo "Value $searchValue is not present in the array.";
}
?>

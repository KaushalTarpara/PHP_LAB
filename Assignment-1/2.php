<!DOCTYPE html>
<html>
<head>
    <title>Array Functions Demo</title>
</head>
<body>

<?php
$inputArray = [1 => 'HP', 2 => 'ASUS', 3 => 'DELL', 4 => 'ACER'];

function displayArrayFunctionDemo($functionName, $purpose, $input, $output) {
    echo "<h2>$functionName()</h2>";
    echo "<p><strong>Purpose:</strong> $purpose</p>";
    echo "<p><strong>Input:</strong> ";
    print_r($input);
    echo "</p>";
    echo "<p><strong>Output:</strong> ";
    print_r($output);
    echo "</p><br>";
}

displayArrayFunctionDemo(
    'array_change_key_case',
    'Change the case of all keys in an array.',
    $inputArray,
    array_change_key_case($inputArray, CASE_UPPER)
);


displayArrayFunctionDemo(
    'array_chunk',
    'Split an array into chunks of specified size.',
    $inputArray,
    array_chunk($inputArray, 2)
);


$keys = ['a', 'b', 'c'];
$values = [1, 2, 3];
displayArrayFunctionDemo(
    'array_combine',
    'Create an array by using one array for keys and another for values.',
    [$keys, $values],
    array_combine($keys, $values)
);


$array1 = [1, 2, 3];
$array2 = [2, 3, 4];
displayArrayFunctionDemo(
    'array_diff',
    'Compute the difference between arrays.',
    [$array1, $array2],
    array_diff($array1, $array2)
);


$array1Assoc = ['a' => 1, 'b' => 2, 'c' => 3];
$array2Assoc = ['b' => 2, 'c' => 4];
displayArrayFunctionDemo(
    'array_diff_assoc',
    'Compute the difference between arrays with additional index check.',
    [$array1Assoc, $array2Assoc],
    array_diff_assoc($array1Assoc, $array2Assoc)
);


$array1Keyed = ['a' => 1, 'b' => 2, 'c' => 3];
$array2Keyed = ['b' => 2, 'd' => 4];
displayArrayFunctionDemo(
    'array_diff_key',
    'Compute the difference between arrays using keys for comparison.',
    [$array1Keyed, $array2Keyed],
    array_diff_key($array1Keyed, $array2Keyed)
);


displayArrayFunctionDemo(
    'array_fill',
    'Fill an array with values.',
    [3, 'SONY'],
    array_fill(0, 3, 'SONY')
);


$array3 = [2, 3, 4];
displayArrayFunctionDemo(
    'array_intersect',
    'Compute the intersection of arrays.',
    [$array1, $array3],
    array_intersect($array1, $array3)
);


$keyToCheck = 'b';
displayArrayFunctionDemo(
    'array_key_exists',
    'Check if a key exists in an array.',
    [$keyToCheck, $array1Assoc],
    array_key_exists($keyToCheck, $array1Assoc)
);


displayArrayFunctionDemo(
    'array_keys',
    'Return all the keys or a subset of keys from an array.',
    $array1Assoc,
    array_keys($array1Assoc)
);

$array4 = ['d' => 4, 'e' => 5];
displayArrayFunctionDemo(
    'array_merge',
    'Merge one or more arrays.',
    [$array1Assoc, $array4],
    array_merge($array1Assoc, $array4)
);


displayArrayFunctionDemo(
    'array_merge_recursive',
    'Merge two or more arrays recursively.',
    [$array1Assoc, $array2Assoc],
    array_merge_recursive($array1Assoc, $array2Assoc)
);


displayArrayFunctionDemo(
    'array_pop',
    'Pop the element off the end of an array.',
    $inputArray,
    array_pop($inputArray)
);


displayArrayFunctionDemo(
    'array_push',
    'Push one or more elements onto the end of an array.',
    [$inputArray, 'END'],
    array_push($inputArray, 'END')
);


displayArrayFunctionDemo(
    'array_rand',
    'Pick one or more random keys from an array.',
    $inputArray,
    array_rand($inputArray, 2)
);


displayArrayFunctionDemo(
    'array_shift',
    'Shift an element off the beginning of an array.',
    $inputArray,
    array_shift($inputArray)
);


displayArrayFunctionDemo(
    'array_slice',
    'Extract a slice of an array.',
    $inputArray,
    array_slice($inputArray, 1, 3)
);


$numbers = [10, 20, 30, 40];
displayArrayFunctionDemo(
    'array_sum',
    'Calculate the sum of values in an array.',
    $numbers,
    array_sum($numbers)
);


$prices = ['HP' => 12, 'DELL' => 75, 'ASUS' => 200];
function addTax(&$value, $key) {
    $value += $value * 0.1; // Add 10% tax
}

array_walk($prices, 'addTax');
displayArrayFunctionDemo(
    'array_walk',
    'Apply a user-defined function to each element of an array.',
    $prices,
    $prices
);


displayArrayFunctionDemo(
    'arsort',
    'Sort an associative array in reverse order, preserving keys.',
    $prices,
    arsort($prices)
);


reset($inputArray);
displayArrayFunctionDemo(
    'current',
    'Return the current element in an array.',
    $inputArray,
    current($inputArray)
);


displayArrayFunctionDemo(
    'end',
    'Set the internal pointer of an array to its last element.',
    $inputArray,
    end($inputArray)
);


displayArrayFunctionDemo(
    'krsort',
    'Sort an associative array by key in reverse order.',
    $inputArray,
    krsort($inputArray)
);


reset($inputArray);
displayArrayFunctionDemo(
    'next',
    'Advance the internal pointer of an array.',
    $inputArray,
    next($inputArray)
);


reset($inputArray);
displayArrayFunctionDemo(
    'pos',
    'Return the current element in an array and advance the internal pointer.',
    $inputArray,
    pos($inputArray)
);


reset($inputArray);
next($inputArray);
displayArrayFunctionDemo(
    'prev',
    'Move the internal pointer of an array backward.',
    $inputArray,
    prev($inputArray)
);


displayArrayFunctionDemo(
    'range',
    'Create an array containing a range of elements.',
    [1, 5],
    range(1, 5)
);


displayArrayFunctionDemo(
    'reset',
    'Set the internal pointer of an array to its first element.',
    $inputArray,
    reset($inputArray)
);


shuffle($inputArray);
displayArrayFunctionDemo(
    'shuffle',
    'Shuffle the elements of an array.',
    $inputArray,
    $inputArray
);
?>

</body>
</html>

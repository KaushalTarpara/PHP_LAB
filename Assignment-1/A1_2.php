<!DOCTYPE html>
<html>
<head>
    <title>Array Functions Demo</title>
</head>
<body>

<?php
$assocArray1 = ["a" => "apple", "b" => "banana"];
$inputArray = ["apple", "banana", "cherry", "date", "fig"];
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = [3, 4, 5, 6, 7];
$assocArray2 = ["a" => "apricot", "b" => "blueberry"];
$person = ["name" => "John", "age" => 30];
$stack = [1, 2, 3, 4, 5];
$queue = [1, 2, 3, 4, 5];
$fruits = ["apple", "banana", "cherry"];
$fruitsAssoc = ["cherry" => "red", "apple" => "green", "banana" => "yellow"];
$deck = range(1, 52);

$functions = [
    // Function: array_change_key_case() - Changes keys to lowercase
    'array_change_key_case' => [$assocArray1, CASE_LOWER],

    // Function: array_chunk() - Splits array into chunks
    'array_chunk' => [$inputArray, 2],

    // Function: array_combine() - Combines arrays into an associative array
    'array_combine' => [["firstName", "lastName"], ["John", "Doe"]],

    // Function: array_diff() - Computes difference between arrays
    'array_diff' => [$numbers1, $numbers2],

    // Function: array_diff_assoc() - Computes difference with index check
    'array_diff_assoc' => [$assocArray1, $assocArray2],

    // Function: array_diff_key() - Computes difference based on keys
    'array_diff_key' => [$assocArray1, $assocArray2],

    // Function: array_fill() - Fills array with values
    'array_fill' => [0, 5, "Value"],

    // Function: array_intersect() - Computes intersection of arrays
    'array_intersect' => [$numbers1, $numbers2],

    // Function: array_key_exists() - Checks if key exists
    'array_key_exists' => ["age", $person],

    // Function: array_keys() - Returns array keys
    'array_keys' => [$fruitsAssoc],

    // Function: array_merge() - Merges arrays
    'array_merge' => [$assocArray1, $assocArray2],

    // Function: array_merge_recursive() - Merges arrays recursively
    'array_merge_recursive' => [$assocArray1, $assocArray2],

    // Function: array_pop() - Removes and returns last element
    'array_pop' => [$stack],

    // Function: array_push() - Pushes elements to end
    'array_push' => [$stack, 6, 7],

    // Function: array_rand() - Picks random key
    'array_rand' => [$fruits],

    // Function: array_shift() - Removes and returns first element
    'array_shift' => [$queue],

    // Function: array_slice() - Extracts a portion
    'array_slice' => [$inputArray, 1, 3],

    // Function: array_sum() - Calculates sum
    'array_sum' => [$numbers1],

    // Function: array_walk() - Applies function to each element
    'array_walk' => [&$fruits, function (&$value) { $value = 'fruit_' . $value; }],

    // Function: arsort() - Sorts array in reverse order
    'arsort' => [&$fruitsAssoc],

    // Function: current() - Returns current element
    'current' => [$fruits],

    // Function: end() - Returns last element
    'end' => [$fruits],

    // Function: krsort() - Sorts array by keys in reverse order
    'krsort' => [&$fruitsAssoc],

    // Function: next() - Advances pointer and returns next element
    'next' => [$fruits],

    // Function: prev() - Rewinds pointer and returns previous element
    'prev' => [$fruits],

    // Function: range() - Creates range of elements
    'range' => [1, 5],

    // Function: reset() - Sets pointer to first element and returns it
    'reset' => [&$fruits],

    // Function: shuffle() - Shuffles array
    'shuffle' => [&$deck],
];

foreach ($functions as $functionName => $params) {
    if ($functionName === 'array_merge') {
        $output = call_user_func_array($functionName, $params);
    } else {
        $output = call_user_func_array($functionName, $params);
    }
    echo "<p>$functionName() - Output: ";
    print_r($output);
    echo "</p><br>";
}
?>

</body>
</html>

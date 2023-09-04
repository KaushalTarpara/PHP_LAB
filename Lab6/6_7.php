<?php
// Custom error handling function
function customErrorHandler($num1, $num2) {
    // Check if either parameter is not a number

    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    if (!is_numeric($num1) || !is_numeric($num2)) {
        trigger_error("Both parameters must be numbers.", E_USER_ERROR); // Fatal error
    }

    // Check if the first parameter is less than the second parameter
    if ($num1 < $num2) {
        trigger_error("Warning: The first parameter is less than the second parameter.", E_USER_WARNING);
    }
}

// Register the custom error handler
set_error_handler("customErrorHandler");

// Test the custom error handler
$num1 = "not a number";
$num2 = 10;

customErrorHandler($num1, $num2);
?>

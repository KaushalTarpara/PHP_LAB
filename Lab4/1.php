<?php
function oper($value1, $value2, $operation) {
    switch ($operation) {
        case '+':
            return $value1 + $value2;
        case '-':
            return $value1 - $value2;
        case '*':
            return $value1 * $value2;
        case '/':
            if ($value2 != 0) {
                return $value1 / $value2;
            } else {
                return "Cannot divide by zero";
            }
        default:
            return "Invalid operation";
    }
}

$value1 = 10;
$value2 = 5;
$operation = '-'; 

$result = oper($value1, $value2, $operation);
echo "Result: " . $result;
?>

<?php
function reverseNumber($number) {
    $reverse = 0;
    while ($number > 0) {
        $remainder = $number % 10;
        $reverse = $reverse * 10 + $remainder;
        $number = (int)($number / 10);
    }
    return $reverse;
}
$number = 123;
$reversedNumber = reverseNumber($number);
echo "Original number: $number<br>";
echo "Reversed number: $reversedNumber";
?>

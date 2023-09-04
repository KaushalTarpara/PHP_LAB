<?php
function isPalindrome($number) {
    $numberString = strval($number);
    $reverseString = strrev($numberString);

    return $numberString === $reverseString;
}
$number1 = 121;
echo "$number1 is " . (isPalindrome($number1) ? "a palindrome" : "not a palindrome");
?>

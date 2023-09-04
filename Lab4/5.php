<?php

$string = "Hello, 'World'!";
$quotedString = addcslashes($string, "'");
$quotedString = addslashes($quotedString);

$haystack = "The quick brown fox jumps over the lazy dog";
$needle = "FOX";
$found = stristr($haystack, $needle);

$length = strlen($string);

$lastPos = strrpos($haystack, "brown");

$foundSubstring = strstr($haystack, "jumps");

echo "Original String: $string\n";
echo "addcslashes and addslashes: $quotedString\n";
echo "stristr: $found\n";
echo "strlen: $length\n";
echo "strrpos: $lastPos\n";
echo "strstr: $foundSubstring\n";

?>

<?php

function manipulateString($choice, $str) {
    switch ($choice) {
        case 'reverse':
            return strrev($str);
        case 'length':
            return strlen($str);
        case 'first_word':
            $words = explode(' ', $str);
            return $words[0];
        case 'last_five_words':
            $words = explode(' ', $str);
            $lastFiveWords = array_slice($words, -5);
            return implode(' ', $lastFiveWords);
        case 'substring':
            return substr($str, 4, 11);
        default:
            return "Invalid choice";
    }
}

$choice = 'last_five_words';
$str = "PHP is a server-side scripting language, so the 
        code written in the PHP file is executed on the server.";

$result = manipulateString($choice, $str);
echo "Result: $result";

?>

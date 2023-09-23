<!DOCTYPE html>
<html>
<head>
    <title>String Functions Demo</title>
</head>
<body>

<?php
$strvar = 'HelloStringFunctions';

$functions = [
    // Escapes specified characters with slashes.
    'addcslashes' => [$strvar, 'F'],

    // Converts binary data to a hexadecimal representation.
    'bin2hex' => [011101],

    // Converts an ASCII value to a character.
    'chr' => [65],

    // Splits a string into smaller chunks with a delimiter.
    'chunk_split' => ['1234567890', 2, '-'],

    // Returns information about characters used in a string.
    'count_chars' => [$strvar],

    // Calculates the CRC32 polynomial of a string.
    'crc32' => [$strvar],

    // Splits a string by a specified delimiter into an array.
    'explode' => ['apple,banana,cherry', ','],

    // Returns the translation table used by htmlentities() and htmlspecialchars().
    'get_html_translation_table' => [HTML_ENTITIES],

    // Converts hexadecimal data to binary.
    'hex2bin' => ['48656c6c6f2c20576f726c6421'],

    // Converts HTML entities to their corresponding characters.
    'html_entity_decode' => ['Hello &amp; World!'],

    // Converts special characters to HTML entities.
    'htmlentities' => ['Hello, World!'],

    // Converts HTML entities to their corresponding characters.
    'htmlspecialchars_decode' => ['Hello &lt;strong&gt;World&lt;/strong&gt;!'],

    // Converts special characters to HTML entities.
    'htmlspecialchars' => ['Hello, <strong>World</strong>!'],

    // Joins array elements into a string with a delimiter.
    'implode' => [['HP', 'lenevo', 'Asus'], ', '],

    // Calculates the MD5 hash of a string.
    'md5' => [$strvar],

    // Returns the ASCII value of a character.
    'ord' => ['A'],

    // Formats and outputs a string.
    'printf' => ['Kauhal', 'Tarpara'],

    // Calculates the SHA-1 hash of a string.
    'sha1' => [$strvar],

    // Parses a CSV string into an array.
    'str_getcsv' => ['apple,banana,cherry'],

    // Shuffles the characters in a string.
    'str_shuffle' => [$strvar],

    // Splits a string into an array of characters.
    'str_split' => [$strvar],

    // Counts the number of words in a string.
    'str_word_count' => [$strvar],

    // Finds the position of the first occurrence of a substring (case-insensitive).
    'stripos' => [$strvar, 'fun'],

    // Finds the first occurrence of a substring (case-insensitive).
    'stristr' => [$strvar, 'f'],

    // Capitalizes the first character of each word in a string.
    'ucwords' => ['hello, world!'],
];

foreach ($functions as $functionName => $params) {
    if ($functionName === 'implode') {
        $output = implode($params[1], $params[0]);
    } else {
        $output = call_user_func_array($functionName, $params);
    }
    echo "<p>$functionName() - Output: $output</p><br>";
}

?>

</body>
</html>

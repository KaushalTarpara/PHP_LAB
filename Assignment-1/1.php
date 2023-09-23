<!DOCTYPE html>
<html>
<head>
    <title>String Functions Demo</title>
</head>
<body>

<?php
$input = 'HelloStringFunctions';

function displayFunctionDemo($functionName, $purpose, $output) {
    echo "<h2>$functionName()</h2>";
    echo "<p><strong>Purpose:</strong> $purpose</p>";
    echo "<p><strong>Output:</strong> $output</p><br>";
}


displayFunctionDemo(
    'addcslashes', 
    'Escape specified characters with slashes.', 
    addcslashes($input, 'F')
);


displayFunctionDemo(
    'bin2hex', 
    'Convert binary data to a hexadecimal representation.', 
    bin2hex($input)
);

displayFunctionDemo(
    'chr', 
    'Convert an ASCII value to a character.', 
    chr(65)
);


displayFunctionDemo(
    'chunk_split', 
    'Split a string into smaller chunks with a delimiter.', 
    chunk_split('1234567890', 2, '-')
);


displayFunctionDemo(
    'count_chars', 
    'Return information about characters used in a string.', 
    count_chars($input, 3)
);


displayFunctionDemo(
    'crc32', 
    'Calculate the CRC32 polynomial of a string.', 
    crc32($input)
);


displayFunctionDemo(
    'explode', 
    'Split a string by a specified delimiter into an array.', 
    implode(', ', explode(',', 'apple,banana,cherry'))
);


displayFunctionDemo(
    'get_html_translation_table', 
    'Return the translation table used by htmlentities() and htmlspecialchars().', 
    implode(', ', get_html_translation_table(HTML_SPECIALCHARS))
);


displayFunctionDemo(
    'hex2bin', 
    'Convert hexadecimal data to binary.', 
    hex2bin('48656c6c6f2c20576f726c6421')
);


displayFunctionDemo(
    'html_entity_decode', 
    'Convert HTML entities to their corresponding characters.', 
    html_entity_decode('Hello &amp; World!')
);


displayFunctionDemo(
    'htmlentities', 
    'Convert special characters to HTML entities.', 
    htmlentities('Hello, World!')
);


displayFunctionDemo(
    'htmlspecialchars_decode', 
    'Convert HTML entities to their corresponding characters.', 
    htmlspecialchars_decode('Hello &lt;strong&gt;World&lt;/strong&gt;!')
);


displayFunctionDemo(
    'htmlspecialchars', 
    'Convert special characters to HTML entities.', 
    htmlspecialchars('Hello, <strong>World</strong>!')
);


displayFunctionDemo(
    'implode', 
    'Join array elements into a string with a delimiter.', 
    implode(', ', ['HP', 'lenevo', 'Asus'])
);


displayFunctionDemo(
    'md5', 
    'Calculate the MD5 hash of a string.', 
    md5($input)
);


displayFunctionDemo(
    'ord', 
    'Return the ASCII value of a character.', 
    ord('A')
);


displayFunctionDemo(
    'printf', 
    'Format and output a string.', 
    sprintf('Kauhal', 'Tarpara')
);


displayFunctionDemo(
    'sha1', 
    'Calculate the SHA-1 hash of a string.', 
    sha1($input)
);


displayFunctionDemo(
    'str_getcsv', 
    'Parse a CSV string into an array.', 
    implode(', ', str_getcsv('apple,banana,cherry'))
);


displayFunctionDemo(
    'str_shuffle', 
    'Shuffle the characters in a string.', 
    str_shuffle($input)
);


displayFunctionDemo(
    'str_split', 
    'Split a string into an array of characters.', 
    implode(', ', str_split($input))
);

displayFunctionDemo(
    'str_word_count', 
    'Count the number of words in a string.', 
    str_word_count($input)
);


displayFunctionDemo(
    'stripos', 
    'Find the position of the first occurrence of a substring (case-insensitive).', 
    stripos($input, 'fun')
);


displayFunctionDemo(
    'stristr', 
    'Find the first occurrence of a substring (case-insensitive).', 
    stristr($input, 'f')
);

displayFunctionDemo(
    'ucwords', 
    'Capitalize the first character of each word in a string.', 
    ucwords('hello, world!')
);
?>

</body>
</html>

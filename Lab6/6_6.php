<!DOCTYPE html>
<html>
<head>
    <title>Error Demo</title>
</head>
<body>
    <h1>Error Demo</h1>

    <?php

    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa")."<br>";


    // Notice Erro
    echo $undefinedVariable;

    // Warning Error
    $file = 'non_existent_file.txt';
    $fileHandle = fopen($file, 'r');

    // Fatal Error
    function divide($a, $b) {
        if ($b == 0) {
            trigger_error("Division by zero is not allowed.", E_USER_ERROR); 
        }
        return $a / $b;
    }

    $result = divide(10, 0);
    echo "Result: $result";

    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    ?>

</body>
</html>

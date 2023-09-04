<?php

$marks = array(
    "kaushal" => 34,
    "Rahul" => 36,
    "Karan" => 42,
    "Aman" => 29,
    "Jaivin" => 40
);


asort($marks);


echo "Array sorted by marks in ascending order:<br>";
foreach ($marks as $name => $mark) {
    echo "$name: $mark<br>";
}

echo "<br>";


krsort($marks);


echo "Array sorted by names in descending order:<br>";
foreach ($marks as $name => $mark) {
    echo "$name: $mark<br>";
}
?>

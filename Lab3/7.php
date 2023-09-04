<?php

$matrix = array(
    array(1, 2),
    array(3, 4),
    array(5, 6)
);


echo "Matrix:<br>";
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 2; $col++) {
        echo $matrix[$row][$col] . " ";
    }
    echo "<br>";
}
?>

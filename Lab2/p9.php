<?php
function countCalls() {
    static $counter = 0; 
    $counter++;
    echo "Function has been called $counter times.<br>";
}

countCalls();
countCalls();
countCalls();
?>

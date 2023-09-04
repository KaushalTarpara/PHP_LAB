<?php
extract($_REQUEST);
if (isset($sbt)) {
    $arr = explode(",", $no);
    echo "No is : <br>";
    $result = array_sum($arr);
    foreach ($arr as $ele) {
        echo $ele . "<br>";
    }

    echo "<br>Sum is : $result<br>";
    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
    
}
?> 
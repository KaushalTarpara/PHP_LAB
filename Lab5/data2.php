<?php
if (isset($_COOKIE)) {
    echo ("Name is : " . $_COOKIE['fname'] . "<br>");
    echo ("1st sub mark is : " . $_COOKIE['m1'] . "<br>");
    echo ("2nd sub mark is : " . $_COOKIE['m2'] . "<br>");
    echo ("3rd sub mark is : " . $_COOKIE['m3'] . "<br>");
    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
}
?>
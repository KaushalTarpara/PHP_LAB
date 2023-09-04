<?php
extract($_REQUEST);
if (isset($sbt)) {
    setcookie("uname", $uname);
    setcookie("age", $age);
    setcookie("city", $city);
    print "User name is :" . $_COOKIE["uname"] . "<br>";
    print "Age is :" . $_COOKIE["age"] . "<br>";
    print "City is :" . $_COOKIE["city"] . "<br>";
    echo "<hr>Today is " . date("d/m/Y") . "<br>";
    echo "The time is " . date("h:i:sa");
}
?>

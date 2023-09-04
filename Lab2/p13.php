<?php
function checkAge($age) {
    if ($age < 20 || $age > 60) {
        echo "Not a valid age";
        echo "<br>";
    } elseif ($age >= 20 && $age <= 35) {
        echo "Age is in the range of 20 to 35";
        echo "<br>";
    } elseif ($age >= 36 && $age <= 55) {
        echo "Age is in the range of 36 to 55";
        echo "<br>";
    } else {
        echo "Age is more than 55";
        echo "<br>";
    }
}
$age1 = 18;
$age2 = 25;
$age3 = 40;
$age4 = 65;

checkAge($age1);
checkAge($age2); 
checkAge($age3); 
checkAge($age4); 
?>

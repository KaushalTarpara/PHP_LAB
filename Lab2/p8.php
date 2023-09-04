<?php

global $globalVar1;
global $globalVar2;

$globalVar1 = "I am global variable 1.";
$globalVar2 = "I am global variable 2.";

function demonstrateGlobalScope() {
    global $globalVar1, $globalVar2;
    echo "Inside the function:\n";
    echo "Global Variable 1: " . $globalVar1 . "<br>";
    echo "Global Variable 2: " . $globalVar2 . "<nr>";
}

echo "Outside the function:\n";
echo "Global Variable 1: " . $globalVar1 . "<br>";
echo "Global Variable 2: " . $globalVar2 . "<br>";

demonstrateGlobalScope();

function nestedFunction() {
    echo "Inside the nested function:\n";
    echo "Global Variable 1: " . $globalVar1 . "<br>";
    echo "Global Variable 2: " . $globalVar2 . "<br>";
}

nestedFunction();
?>

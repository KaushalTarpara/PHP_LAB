<?php
function demonstrateLocalScope() {
    $localVar = "I am a local variable::";
    echo "Inside the function::$localVar";
    echo "<br>";
}
echo "Outside the function::$localVar";

?>

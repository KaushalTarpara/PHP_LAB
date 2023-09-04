<?php
 extract($_POST);
 if(isset($sbt))
 {
 echo("<h4>"); 
echo "Name is $name ". "<br>"; 
echo "Password is : " . $pass . "<br>"; 
echo "Contact is : " . $contact . "<br>"; 
echo "Branch is : " . $branch . "<br>"; 
echo("</h4>");
echo "<hr>Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");

 }
?>
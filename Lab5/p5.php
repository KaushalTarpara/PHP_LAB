<!DOCTYPE html>
<html lang="en">
<head >
    <style>
        input{
            width: 150px;
        }
    </style>
</head>
<body>
 <form method="POST" name ="frm" action="./data2.php">
 
 <input type="text" placeholder="Enter name" name="fname" required><br><br>
 <input type="number" placeholder="Enter 1st subject mark" name="m1" max="100" min="0" required><br><br>
 <input type="number" placeholder="Enter 2nd subject mark" name="m2" max="100" min="0" required><br><br>
 <input type="number" placeholder="Enter 3rd subject mark" name="m3"max="100" min="0" required><br><br>
 <input type="Submit" name="sbt" value="Submit">
 
 </form>
</body> 
</html>

<?php
extract($_REQUEST); 
 if(isset($sbt))
 {
    setcookie("fname", $fname); 
    setcookie("m1", $m1); 
    setcookie("m2", $m2); 
    setcookie("m3", $m3);
 }
?>
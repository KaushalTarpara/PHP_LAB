<!DOCTYPE html>
<html lang="en">
    <body>
      <form method="POST" name ="frm">        
                  <?php
                     extract($_REQUEST);
                     if(isset($sbt))
                     {
                     switch($sbt)
                     {
                     case "+":
                     echo("Result is : " . ($no1 + $no2));
                     break;
                     case "-":
                     echo("Result is : " . ($no1 - $no2));
                     break;
                     case "*":
                     echo("Result is : " . ($no1 * $no2));
                     break;
                     case "/":
                     echo("Result is : " . ($no1 / $no2));
                     break;
                     }
                     echo "<br><br>";
                     }
                     ?>  
               <input type="number" placeholder="Enter 1st no" name="no1" min="0"   required> <br><br>
               <input type="number" placeholder="Enter 2nd no" name="no2" min="0"   required> <br><br>
               <input type="Submit" name="sbt" value="+">
               <input type="Submit" name="sbt" value="-">
               <input type="Submit" name="sbt" value="*">
               <input type="Submit" name="sbt" value="/">
         <?php      echo "<hr>Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");
?>
      </form>
   </body>
</html>
<?php

    include 'conn.php';
   
    if(isset($_GET["submit"]))  {
       
       
        $stmt = $conn->prepare("INSERT INTO empinfo (name, age, sal) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $_GET['ename'],$_GET['eage'],$_GET['esal']);
        $stmt->execute();
            
        if($stmt == true)
        {
            echo "Data inserted successfully.";      
        }
        else
        {
            echo "Data has not been inserted!<BR>";
            echo "Reason: ", $conn->error;
        }
        // $conn->close();
    }

    if(isset($_GET['isDeleted'])){
            echo "<h1>Recored deleted<h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
    <h1> Home page </h1>
    <form action="home.php" method="GET" >
        <h3>
            Enter Name :<input type="text" name = "ename"> <br>
            Enter Age :<input type="number" name = "eage"><br>
            Enter Salary :<input type="text" name = "esal"><br>
            <input type="submit" name="submit">
        </h3>
    </form>

    <?php  include 'display.php';   ?>
</body>
</html>
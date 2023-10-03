<?php

    include 'conn.php';

    $conn = mysqli_connect($servername, $username, $password,$dbname);


    if(isset($_GET["submit"]))  {
        
        $insert_sql = "INSERT INTO personinfo(name, age,city) VALUES ('$_GET[pname]',$_GET[page],'$_GET[pcity]')";
        $qry = $conn->query($insert_sql);
        if($qry == true)
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

    if(isset($_GET['isDeleted']))
    {
            echo "<h1>Recored deleted<h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
    <h1> Home page </h1>
    <form action="home.php" method="GET" >
        <h3>
            Enter Name :<input type="text" name = "pname"> <br>
            Enter Age :<input type="number" name = "page"><br>
            Enter City :<input type="text" name = "pcity"><br>
            <input type="submit" name="submit">
        </h3>
    </form>

    <?php  include 'display.php';   ?>
</body>
</html>
<?php
    include 'conn.php';
  
    $conn = new mysqli($servername,$username, $password,$dbname);   
    $recode = array("null","","null","null");   
    if(isset($_GET["submit"])){
        echo 'aft submited';
        $sql = "UPDATE personinfo SET age=$_GET[uage] AND city='$_GET[ucity]' WHERE pid=$_GET[id]";
    
        $result = $conn->query($sql);
        if($result)
        {
            echo "Data updated successfully.";       
        }
        else
        {
            echo "Error occurred while updating the record!<BR>";
            echo "Reason: ", $conn->error;
        }
    }else{
        $f_query = "SELECT * FROM personinfo WHERE pid = $_GET[id]";
        $res = $conn->query($f_query);
        $recode = $res->fetch_row();
    }
        //$conn->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
   
</head>
<body>
<h1> Update page </h1>
    <form action="update.php" method="GET" >
    <h3>
    <input type="hidden" name = "id" value="<?php echo $recode[0]; ?>" >
    Enter Name :<input type="text" name = "uname" value="<?php echo $recode[1]; ?>" readonly > <br>
    Enter Age :<input type="number" name = "uage" value="<?php echo $recode[2]; ?>" ><br>
    Enter City :<input type="text" name = "ucity" value="<?php echo $recode[3]; ?>" ><br>
    <input type="submit" name="submit" >
    <br><a href="home.php">Home</a>
    </h3>
    </form>
    
    <?php 
    include 'display.php';
    ?>
</body>
</html>
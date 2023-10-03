<?php
    include 'conn.php'; 
    $recode = array("null","","null","null");   
    
    if(isset($_GET["submit"])){
        
        $sql = "UPDATE empinfo SET sal=$_GET[usal] WHERE eid=$_GET[id]";
    
        $result = $conn->query($sql);
        if($result)
        {
            echo "<h2>Data updated successfully.";       
        }
        else
        {
            echo "Error occurred while updating the record!<BR>";
            echo "Reason: ", $conn->error;
        }
    }else{
        $f_query = "SELECT * FROM empinfo WHERE eid = $_GET[id]";
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
    <link rel="stylesheet" href="form.css">
</head>
<body>
<h1> Update page </h1>
    <form action="update.php" method="GET" >
    <h3>
    <input type="hidden" name = "id" value="<?php echo $recode[0]; ?>" >
    Enter Name :<input type="text" name = "uname" value="<?php echo $recode[1]; ?>" readonly > <br>
    Enter Age :<input type="number" name = "uage" value="<?php echo $recode[2]; ?>" readonly ><br>
    Enter City :<input type="number" name = "usal" value="<?php echo $recode[3]; ?>" ><br>
    <input type="submit" name="submit" >
    <br><a href="home.php">Home</a>
    </h3>
    </form>
    
    <?php 
    include 'display.php';
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    $query = "SELECT * from personinfo";
    
    if ($result=mysqli_query($conn,$query))
    {
   
    ?>
    <table border="1">
    <tr>   
        <th>ID</th>
        <th>Name</th>
        <th>age</th>
        <th>city</th>
        <th>Opration</th>
    </tr>
    <?php
    while ($row=mysqli_fetch_row($result))
        {
            ?>
            <tr>
                <td><?php echo $row[0] ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><a href="update.php?id=<?php echo $row[0] ?>">Update </a>
                <a href="delete.php?id=<?php echo $row[0] ?>">Delete </a></td>
            </tr>
            <?php            
        }
    
    mysqli_free_result($result);
    }
    mysqli_close($conn);
    ?>
    </table>
</body>
</html>
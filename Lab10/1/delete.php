<?php 
    include "conn.php";

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $sql = "DELETE FROM personinfo WHERE pid=$_GET[id]";
  
  $conn->exec($sql);
  
  header("Location: home.php?isDeleted=True");
?>
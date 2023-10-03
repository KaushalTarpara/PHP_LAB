<?php 
  include "conn.php";
  
  
  $sql = "DELETE FROM empinfo WHERE eid=$_GET[id]";
  
  $conn->query($sql);
  
  header("Location: home.php?isDeleted=True");
?>
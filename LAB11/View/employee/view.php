<!DOCTYPE html>
<html>

<head>
    <title>View Employee</title>
</head>

<body>
    <h1>View Employee</h1>
    <p><strong>Employee ID:</strong> <?php echo $employee['empid']; ?></p>
    <p><strong>Name:</strong> <?php echo $employee['name']; ?></p>
    <p><strong>Department:</strong> <?php echo $employee['department']; ?></p>
    <a href="index.php?page=employee&action=edit&id=<?php echo $employee['empid']; ?>">Edit</a>
    <a href="index.php?page=employee&action=delete&id=<?php echo $employee['empid']; ?>">Delete</a>
</body>

</html>


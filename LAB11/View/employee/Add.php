<?php

use LAB11\Controller\EmployeeController;

require_once __DIR__ . '/../../Controller/EmployeeController.php';
if (isset($_POST['Insert'])) {
    EmployeeController::Insert($_POST['name'], $_POST['department']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Employee</title>
</head>

<body>
    <h1>Add Employee</h1>
    <form action="" method="post">
        <input type="hidden" name="empid">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br>
        <button type="submit" name="Insert">Insert</button>
    </form>
</body>

</html>

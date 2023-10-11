<?php

use LAB11\Controller\EmployeeController;

if (isset($_POST['UpdateData'])) {
    EmployeeController::Update($empid, $_POST['name'], $_POST['department']);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
</head>

<body>
    <h1>Edit Employee</h1>
    <form action="" method="post">
        <input type="hidden" name="empid" value="<?php echo $empid; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required><br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="<?php echo $department; ?>" required><br>
        <button type="submit" name="UpdateData">UpdateData</button>
    </form>
</body>

</html>

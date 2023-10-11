<?php

use LAB11\Controller\EmployeeController;
use LAB11\Model\EmployeeModel;

if (isset($_POST['view'])) {
    EmployeeController::ViewById($_POST['empid']);
}
if (isset($_POST['update'])) {
    $empid = $_POST['empid'];
    $employee = EmployeeModel::ViewById($_POST['empid']);
    EmployeeController::UpdateView($empid, $employee['name'], $employee['department']);
}
if (isset($_POST['delete'])) {
    $empid = $_POST['empid'];
    EmployeeController::Delete($empid);
}
if (isset($_POST['insert'])) {
    header("location:./View/employee/add.php");
}

unset($_POST);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee List</title>
</head>

<body>
    <h1>Employee List</h1>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee) : ?>
                <tr>
                    <td><?php echo $employee['empid']; ?></td>
                    <td><?php echo $employee['name']; ?></td>
                    <td><?php echo $employee['department']; ?></td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <form action="index.php?page=employee&action=view" method="post">
                                        <input type="hidden" name="empid" value="<?php echo $employee['empid']; ?>">
                                        <button type="submit" name="view">View</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="./" method="post">
                                        <input type="hidden" name="empid" value="<?php echo $employee['empid']; ?>">
                                        <button type="submit" name="update">Update</button>
                                    </form>

                                </td>
                                <td>
                                    <form action="index.php?page=employee&action=delete" method="post">
                                        <input type="hidden" name="empid" value="<?php echo $employee['empid']; ?>">
                                        <button type="submit" name="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="#" method="post">
        <button type="submit" name="insert">Add Employee</button>
    </form>
</body>

</html>

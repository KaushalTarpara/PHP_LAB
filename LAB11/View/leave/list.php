<?php

use LAB11\Controllers\LeaveController;

if (isset($_POST['approve'])) {
    LeaveController::approveLeave($_POST['leave_id']);
}
if (isset($_POST['disapprove']))
    LeaveController::disapproveLeave($_POST['leave_id']);

if (isset($_POST['request_leave']))
    header("location:request.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Leave List</title>
</head>

<body>
    <h1>Leave List</h1>
    <table>
        <thead>
            <tr>
                <!-- <th>Leave ID</th> -->
                <th>Employee ID</th>
                <th>Leave Date</th>
                <th>Leave Reason</th>
                <th>Leave Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($leaves as $leave) : ?>
                <tr>
                    <!-- <td><?php echo $leave['leave_id']; ?></td> -->
                    <td><?php echo $leave['empid']; ?></td>
                    <td><?php echo $leave['leave_date']; ?></td>
                    <td><?php echo $leave['leave_reason']; ?></td>
                    <td><?php echo $leave['leave_status']; ?></td>
                    <td>
                        <table>
                            <tr>
                                <td>
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                        <input type="hidden" name="leave_id" value="<?php echo $leave['empid']; ?>">
                                        <button type="submit" name="approve">Approve</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                        <input type="hidden" name="leave_id" value="<?php echo $leave['empid']; ?>">
                                        <button type="submit" name="disapprove">Disapprove</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <button type="submit" name="request_leave">Request Leave</button>
    </form>
</body>

</html>

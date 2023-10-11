<?php

namespace LAB11\Controllers;

use LAB11\Models\LeaveModel;

class LeaveController
{
    public static function listLeaves()
    {
        $leaveModel = new LeaveModel();

        $leaves = $leaveModel->getAllLeaves();

        require_once __DIR__ . '/../View/leave/list.php';
    }

    public static function requestLeave($data)
    {
        $leaveModel = new LeaveModel();

        $success = $leaveModel->requestLeave($data);

        if ($success) {
            header("Location: index.php?page=leave&action=list");
        } else {
            die("Failed to request leave.");
        }
    }

    public static function approveLeave($leaveId)
    {
        $leaveModel = new LeaveModel();

        $success = $leaveModel->approveLeave($leaveId);
        if ($success) {
            echo <<<EOL
            <script>
                alert('leave approved...')
            </script>
            EOL;
        } else
            echo <<<EOL
            <script>
                alert('leave rejected...')
            </script>
            EOL;
    }

    public static function disapproveLeave($leaveId)
    {
        $leaveModel = new LeaveModel();

        $success = $leaveModel->disapproveLeave($leaveId);

        if ($success) {
            echo <<<EOL
            <script>
                alert('leave disapproved...')
            </script>
            EOL;
        } else
            echo <<<EOL
            <script>
                alert('failed to disapprove leave...')
            </script>
            EOL;
    }
}

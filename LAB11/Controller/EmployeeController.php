<?php

namespace LAB11\Controller;

require_once __DIR__ . '/../Model/EmployeeModel.php';
require_once __DIR__ . '/../Model/LeaveModel.php';
require_once __DIR__ . '/../Controller/LeaveController.php';

use LAB11\Controllers\LeaveController;
use LAB11\Model\EmployeeModel;

class EmployeeController extends EmployeeModel
{
    private function __construct()
    {
    }
    public static function All(): array
    {
        $employees = EmployeeModel::All();
        require_once __DIR__ . '/../View/employee/list.php';
        return [];
    }
    public static function Insert($name, $department)
    {
        if (EmployeeModel::Insert($name, $department)) {
            echo <<<EOL
            <script>
                alert('record is Inserted...')
            </script>
            EOL;
        } else
            echo <<<EOL
            <script>
                alert('faild to Insert...')
            </script>
            EOL;
    }
    public static function ViewById($empid)
    {
        $employee = EmployeeModel::ViewById($empid);
        require_once __DIR__ . '/../View/employee/view.php';
        LeaveController::listLeaves();
    }
    public static function UpdateView($empid, $name, $department)
    {
        require_once __DIR__ . '/../View/employee/edit.php';
    }
    public static function Update($empid, $name, $department)
    {
        if (EmployeeModel::Update($empid, $name, $department)) {
            echo <<<EOL
            <script>
                alert('record is upated...')
            </script>
            EOL;
        } else
            echo <<<EOL
            <script>
                alert('faild to update...')
            </script>
            EOL;
    }
    public static function Delete($empid)
    {
        if (EmployeeModel::Delete($empid)) {
            echo <<<EOL
            <script>
                alert('record is deleted...')
            </script>
            EOL;
        }
    }
}

<?php

namespace LAB11\Models;

use LAB11\Model\Database;
use PDOException;

class LeaveModel
{
    public function getAllLeaves()
    {
        try {
            $pdo = Database::getInstance();
            $query = "SELECT * FROM leaves";
            $stmt = $pdo->query($query);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function requestLeave($data)
    {
        try {
            $pdo = Database::getInstance();
            $query = "INSERT INTO leaves (empid, leave_date, leave_reason, leave_status) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$data['empid'], $data['leave_date'], $data['leave_reason'], 'Pending']);
            return true;
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function approveLeave($leaveId)
    {
        try {
            $pdo = Database::getInstance();
            $query = "UPDATE leaves SET leave_status = 'Approved' WHERE empid = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$leaveId]);
            return true;
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }

    public function disapproveLeave($leaveId)
    {
        try {
            $pdo = Database::getInstance();
            $query = "UPDATE leaves SET leave_status = 'Disapproved' WHERE empid = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$leaveId]);
            return true;
        } catch (PDOException $e) {
            die("Database error: " . $e->getMessage());
        }
    }
}

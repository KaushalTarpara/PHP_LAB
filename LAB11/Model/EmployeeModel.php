<?php

namespace LAB11\Model;

require_once __DIR__ . '/./Database.php';

use PDO;
use PDOException;

class EmployeeModel
{
    private function __construct()
    {
    }

    public static function All(): array
    {
        try {
            $pdo = Database::getInstance();
            $query = "SELECT * FROM Employee";
            $stmt = $pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching employees: " . $e->getMessage());
        }
    }

    public static function Insert($name, $department)
    {
        try {
            $pdo = Database::getInstance();
            $query = "INSERT INTO Employee (name, department) VALUES (:name, :department)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':department', $department);
            return $stmt->execute();
        } catch (PDOException $e) {
            die("Error inserting employee: " . $e->getMessage());
        }
    }

    public static function ViewById($empid)
    {
        try {
            $pdo = Database::getInstance();
            $query = "SELECT * FROM Employee WHERE empid = :empid";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':empid', $empid);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error fetching employee by ID: " . $e->getMessage());
        }
    }

    public static function Update($empid, $name, $department)
    {
        try {
            $pdo = Database::getInstance();
            $query = "UPDATE Employee SET name = :name, department = :department WHERE empid = :empid";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':empid', $empid);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':department', $department);
            return boolval($stmt->execute());
        } catch (PDOException $e) {
            die("Error updating employee: " . $e->getMessage());
        }
    }

    public static function Delete($empid)
    {
        try {
            $pdo = Database::getInstance();
            $query = "DELETE FROM Employee WHERE empid = :empid";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':empid', $empid);
            return $stmt->execute();
        } catch (PDOException $e) {
            die("Error deleting employee: " . $e->getMessage());
        }
    }
}

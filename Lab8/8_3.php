<?php
abstract class Employee {
    protected $name;
    protected $yearOfJoining;
    protected $dateOfBirth;
    protected $department;

    public function __construct($name, $yearOfJoining, $dateOfBirth, $department) {
        $this->name = $name;
        $this->yearOfJoining = $yearOfJoining;
        $this->dateOfBirth = $dateOfBirth;
        $this->department = $department;
    }

    public abstract function calculate_salary();

    public function display() {
        echo "<h2>Employee Details</h2>";
        echo "<p>Name: " . $this->name . "</p>";
        echo "<p>Year of Joining: " . $this->yearOfJoining . "</p>";
        echo "<p>Date of Birth: " . $this->dateOfBirth . "</p>";
        echo "<p>Department: " . $this->department . "</p>";
    }
}

class Manager extends Employee {
    private $basicSalary;
    private $DA;
    private $taxAmount;
    private $HRA;

    public function __construct($name, $yearOfJoining, $dateOfBirth, $department, $basicSalary, $DA, $taxAmount, $HRA) {
        parent::__construct($name, $yearOfJoining, $dateOfBirth, $department);
        $this->basicSalary = $basicSalary;
        $this->DA = $DA;
        $this->taxAmount = $taxAmount;
        $this->HRA = $HRA;
    }

    public function calculate_salary() {
        return $this->basicSalary + $this->DA + $this->HRA - $this->taxAmount;
    }

    public function display() {
        parent::display();
        echo "<p>Designation: Manager</p>";
        echo "<p>Salary: " . $this->calculate_salary() . "</p>";
    }
}

class Worker extends Employee {
    private $wagesPerHour;
    private $workedHour;

    public function __construct($name, $yearOfJoining, $dateOfBirth, $department, $wagesPerHour, $workedHour) {
        parent::__construct($name, $yearOfJoining, $dateOfBirth, $department);
        $this->wagesPerHour = $wagesPerHour;
        $this->workedHour = $workedHour;
    }

    public function calculate_salary() {
        return $this->wagesPerHour * $this->workedHour;
    }

    public function display() {
        parent::display();
        echo "<p>Designation: Worker</p>";
        echo "<p>Salary: " . $this->calculate_salary() . "</p>";
    }
}

// Create multiple objects of Manager and Worker class
$manager1 = new Manager("Kauhsal ", 2010, "2002-01-01", "Devlpoment", 5000, 1000, 500, 2000);
$manager2 = new Manager("Anuj", 2012, "1999-05-10", "Marketing", 6000, 1200, 600, 2500);
$worker1 = new Worker("Aman", 2015, "1998-03-15", "Production", 10, 40);
$worker2 = new Worker("Kripal", 2018, "2002-07-20", "Operations", 12, 35);

// Display the name, designation, and salary of each employee
$manager1->display();
$manager2->display();
$worker1->display();
$worker2->display();
?>
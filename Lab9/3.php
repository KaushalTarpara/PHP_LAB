<?php
// Define the base Employee class
class Employee
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function display()
    {
        echo "Name: {$this->name}<br>";
        echo "Age: {$this->age}<br>";
    }
}

// Define the Developer class, inheriting from Employee
class Developer extends Employee
{
    private $skills = [];
    private $salary;
    private $degree;

    public function __construct($name, $age, $skills, $salary, $degree)
    {
        parent::__construct($name, $age);
        $this->skills = $skills;
        $this->salary = $salary;
        $this->degree = $degree;
    }

    public function disp_salary()
    {
        echo "Salary: {$this->salary}<br>";
    }

    public function disp_skill()
    {
        echo "Skills: " . implode(', ', $this->skills) . "<br>";
        echo "Degree: {$this->degree}<br>";
    }
}

// Define the Worker class, inheriting from Employee
class Worker extends Employee
{
    private $working_hr;
    private $per_hr_price;

    public function __construct($name, $age, $working_hr, $per_hr_price)
    {
        parent::__construct($name, $age);
        $this->working_hr = $working_hr;
        $this->per_hr_price = $per_hr_price;
    }

    public function calsalary()
    {
        return $this->working_hr * $this->per_hr_price;
    }

    public function dispsalary()
    {
        echo "Salary: " . $this->calsalary() . "<br>";
    }
}

// Get form input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $employee_type = $_POST["employee_type"];

    // Create objects based on employee type
    if ($employee_type == "Developer") {
        $skills = ["Programming", "Problem Solving"];
        $salary = 60000;
        $degree = "Bachelor's Degree";
        $employee = new Developer($name, $age, $skills, $salary, $degree);
    } elseif ($employee_type == "Worker") {
        $working_hr = 40; // Assuming 40 working hours
        $per_hr_price = 10; // Assuming $10 per hour rate
        $employee = new Worker($name, $age, $working_hr, $per_hr_price);
    }

    // Display employee details
    echo "<h2>Employee Details</h2>";
    $employee->display();
    if ($employee_type == "Developer") {
        $employee->disp_skill();
        $employee->disp_salary();
    } elseif ($employee_type == "Worker") {
        $employee->dispsalary();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Form</title>
</head>
<body>
    <h2>Employee Details</h2>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br><br>

        <label for="employee_type">Employee Type:</label>
        <select id="employee_type" name="employee_type" required>
            <option value="Developer">Developer</option>
            <option value="Worker">Worker</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

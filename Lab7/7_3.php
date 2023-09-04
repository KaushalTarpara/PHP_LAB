<?php
class Course {
    private $courseName;
    private $noOfYears;

    public function getCourseName() {
        return $this->courseName;
    }

    public function setCourseName($courseName) {
        $this->courseName = $courseName;
    }

    public function getNoOfYears() {
        return $this->noOfYears;
    }

    public function setNoOfYears($noOfYears) {
        $this->noOfYears = $noOfYears;
    }
}

class Student extends Course {
    private $name;
    private $passoutYear;
    private $resultClass;

    public function setValue($name, $passoutYear, $resultClass) {
        $this->name = $name;
        $this->passoutYear = $passoutYear;
        $this->resultClass = $resultClass;
    }

    public function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Passout Year: " . $this->passoutYear . "<br>";
        echo "Result Class: " . $this->resultClass . "<br>";
        echo "Course Name: " . $this->getCourseName() . "<br>";
        echo "Number of Years: " . $this->getNoOfYears() . "<br><br>";
    }
}

$student1 = new Student();
$student1->setCourseName("Computer Science");
$student1->setNoOfYears(4);
$student1->setValue("Dev", 2021, "First Class");

$student2 = new Student();
$student2->setCourseName("Electrical Engineering");
$student2->setNoOfYears(4);
$student2->setValue("Anuj", 2020, "Distinction");

$student3 = new Student();
$student3->setCourseName("Master in Computer Application");
$student3->setNoOfYears(2);
$student3->setValue("Kauhsal", 2024, "Second Class");

$student4 = new Student();
$student4->setCourseName("Master in Commerce");
$student4->setNoOfYears(2);
$student4->setValue("Rahul", 2019, "Pass");


$student1->display();
$student2->display();
$student3->display();
$student4->display();

echo "<hr>Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");

?>
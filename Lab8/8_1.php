<?php
class Course {
    public $coursename;
    public $no_of_year;

    public function __construct($coursename, $no_of_year) {
        $this->coursename = $coursename;
        $this->no_of_year = $no_of_year;
    }

    public function display() {
        echo "Course Name: " . $this->coursename . "<br>";
        echo "No. of Years: " . $this->no_of_year . "<br>";
    }
}

class Student extends Course {
    public $stud_id;
    public $stud_name;
    public $marks;

    public function __construct($coursename, $no_of_year, $stud_id, $stud_name, $marks) {
        parent::__construct($coursename, $no_of_year);
        $this->stud_id = $stud_id;
        $this->stud_name = $stud_name;
        $this->marks = $marks;
    }

    public function caltotal() {
        return array_sum($this->marks);
    }

    public function display() {
        parent::display();
        echo "Student ID: " . $this->stud_id . "<br>";
        echo "Student Name: " . $this->stud_name . "<br>";
        echo "Marks: " . implode(", ", $this->marks) . "<br>";
        echo "Total Marks: " . $this->caltotal() . "<br>";
    }
}


$student = new Student("MCA",2, "22MAPOG010", "Kaushal Tarpara", [80, 85, 90]);


$student->display();

?>

<?php
     echo "<hr>Today is " . date("d/m/Y") . "<br>";
     echo "The time is " . date("h:i:sa");
    ?>

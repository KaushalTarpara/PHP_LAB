<?php
// Define the Operation interface
interface Operation {
    public function plus();
    public function minus();
    public function div();
    public function mul();
}

// Create the Arithmetic class
class Arithmetic implements Operation {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function plus() {
        return $this->x + $this->y;
    }

    public function minus() {
        return $this->x - $this->y;
    }

    public function div() {
        if ($this->y == 0) {
            throw new Exception("Division by zero is not allowed.");
        }
        return $this->x / $this->y;
    }

    public function mul() {
        return $this->x * $this->y;
    }
}

// Create the String class
class StringOperation implements Operation {
    private $str1;
    private $str2;

    public function __construct($str1, $str2) {
        $this->str1 = $str1;
        $this->str2 = $str2;
    }

    public function plus() {
        return $this->str1 . $this->str2;
    }

    public function minus() {
        $position = strpos($this->str1, $this->str2);
        if ($position === false) {
            return "Not found";
        }
        return $position;
    }

    public function div() {
        $words = explode(" ", $this->str1);
        return end($words);
    }

    public function mul() {
        return substr_count($this->str1, $this->str2);
    }
}

// Example usage
try {
    $arithmetic = new Arithmetic(10, 5);
    echo "Arithmetic plus: " . $arithmetic->plus() . "<br>";
    echo "Arithmetic minus: " . $arithmetic->minus() . "<br>";
    echo "Arithmetic div: " . $arithmetic->div() . "<br>";
    echo "Arithmetic mul: " . $arithmetic->mul() . "<br>";

    $stringOperation = new StringOperation("Hello World", "World");
    echo "String plus: " . $stringOperation->plus() . "<br>";
    echo "String minus: " . $stringOperation->minus() . "<br>";
    echo "String div: " . $stringOperation->div() . "<br>";
    echo "String mul: " . $stringOperation->mul() . "<br>";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>

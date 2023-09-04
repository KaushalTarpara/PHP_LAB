<?php
class Shape {
    public function area() {
        // overridden in the child classes
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return pow($this->side, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}

// Create objects of each class
$shape = new Shape();
$circle = new Circle(5);
$square = new Square(4);
$rectangle = new Rectangle(3, 6);

// Display the area of each object
echo "Area of Shape: " . $shape->area() . "<br>";
echo "Area of Circle: " . $circle->area() . "<br>";
echo "Area of Square: " . $square->area() . "<br>";
echo "Area of Rectangle: " . $rectangle->area() . "<br>";

?>
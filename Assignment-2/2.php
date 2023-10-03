<?php 
abstract class Shape {
    protected static $totalShapes = 0;
    protected static $circleCount = 0;
    protected static $squareCount = 0;

    protected $area;
   
    public function __construct() {
        self::$totalShapes++;
    }
  
    public static function getTotalShapes() {
        return self::$totalShapes;
    }

    public static function getCircleCount() {
        return self::$circleCount;
    }

    public static function getSquareCount() {
        return self::$squareCount;
    }

    abstract public function set_area();
    abstract public function get_area();
    abstract public function obj_to_string();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius = 1) {
        parent::__construct();
        $this->radius = $radius;        
        self::$circleCount++;
        echo "Constructed a Circle. Number of circles is: " . self::getCircleCount() . " " . self::getTotalShapes() . ".<br>";
   
    }

    public function set_area() {
        $this->area = pi() * pow($this->radius, 2);
    }

    public function get_area() {
        return $this->area;
    }

    public function obj_to_string() {
        echo "STRING OP::Circle[radius={$this->radius}].\n";
    }

    public function __destruct() {
        self::$circleCount--;
        self::$totalShapes--;
        echo "Destructed a Circle. Number of circles is: " . self::getCircleCount() . " " . self::getTotalShapes() . ".<br>";
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length = 1, $width = 1) {
        parent::__construct();
        $this->length = $length;
        $this->width = $width;
        $this->set_area();
        self::$squareCount++;
        echo "Constructed a Square. Number of squares is: " . self::getSquareCount() . " " . self::getTotalShapes() . ".<br>";
   
    }

    public function set_area() {
        $this->area = $this->length * $this->width;
    }

    public function get_area() {
        return $this->area;
    }

    public function obj_to_string() {
        echo "STRING OP::Rectangle[length={$this->length}, width={$this->width}].\n";
    }
    public function __destruct() {
        self::$squareCount--;
        self::$totalShapes--;
        echo "Destructed a Square. Number of squares is: " . self::getSquareCount() . " " . self::getTotalShapes() . ".<br>";
    }
}

$c1 = new Circle();
$c2 = new Circle(12);
$c3 = new Circle(22);
echo $c1->obj_to_string(),"<br>";
echo $c2->obj_to_string(),"<br>";
echo $c3->obj_to_string(),"<br>";

$c4 = new Rectangle();
$c5 = new Rectangle(11, 11);
$c6 = new Rectangle(32, 32);
echo $c4->obj_to_string(),"<br>";
echo $c5->obj_to_string(),"<br>";
echo $c6->obj_to_string(),"<br>";
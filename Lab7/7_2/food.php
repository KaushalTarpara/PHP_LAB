<?php
class Food {
    private $name;
    private $category;
    private $price;

    public function __construct($name, $category, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function order($quantity) {
        return $this->price * $quantity;
    }

    public function display() {
        echo "Name: {$this->name}<br>";
        echo "Category: {$this->category}<br>";
        echo "Price: {$this->price}<br>";
    }
}
?>

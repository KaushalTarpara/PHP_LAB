<?php

class Vehicle {
    protected $prodYear;
    protected $companyName;

    public function setValues($prodYear, $companyName) {
        $this->prodYear = $prodYear;
        $this->companyName = $companyName;
    }

    public function getValues() {
        return "Production Year: {$this->prodYear}<br>Company Name: {$this->companyName}";
    }
}

class TwoWheeler extends Vehicle {
    private $nameOfVehicle;
    private $color;

    public function setValues($prodYear, $companyName) {
        parent::setValues($prodYear, $companyName);
    }

    public function setAdditionalValues($nameOfVehicle, $color) {
        $this->nameOfVehicle = $nameOfVehicle;
        $this->color = $color;
    }

    public function getValues() {
        $parentValues = parent::getValues();
        return "$parentValues<br>Name of Vehicle: {$this->nameOfVehicle}<br>Color: {$this->color}";
    }
}

class FourWheeler extends Vehicle {
    private $vehicleName;
    private $color;
    private $price;
    private $tollTaxRate;

    public function __construct($prodYear, $companyName, $vehicleName, $color, $price, $tollTaxRate) {
        parent::setValues($prodYear, $companyName);
        $this->vehicleName = $vehicleName;
        $this->color = $color;
        $this->price = $price;
        $this->tollTaxRate = $tollTaxRate;
    }

    public function display() {
        $parentValues = parent::getValues();
        echo "$parentValues<br>Vehicle Name: {$this->vehicleName}<br>Color: {$this->color}<br>Price: {$this->price}<br>Toll Tax Rate: {$this->tollTaxRate}";
    }
}

// Create an object of TwoWheeler
$twoWheeler = new TwoWheeler();
$twoWheeler->setValues(2020, "Honda");
$twoWheeler->setAdditionalValues("Scooter", "Red");

// Create an object of FourWheeler
$fourWheeler = new FourWheeler(2019, "Toyota", "Sedan", "Blue", 25000, 5.0);

// Display details for both objects
echo "<h2>Two-Wheeler Details</h2>";
echo $twoWheeler->getValues();

echo "<h2>Four-Wheeler Details</h2>";
$fourWheeler->display();


echo "<hr>Today is " . date("d/m/Y") . "<br>";
echo "The time is " . date("h:i:sa");

?>
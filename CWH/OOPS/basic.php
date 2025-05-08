<?php
class Car {
    public $make;
    public $model;
    public $year;

    // Constructor with parameters
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method
    public function displayCarInfo() {
        echo "Car: " . $this->year . " " . $this->make . " " . $this->model;
    }
    public function getCarInfo() {
        return $this->year . " " . $this->make . " " . $this->model;
    }
}

// Create an object of the class with constructor parameters
$myCar = new Car("Toyota", "Corolla", 2022);

// Call a method to display car info
$myCar->displayCarInfo();
$carInfo = $myCar->getCarInfo();
?>
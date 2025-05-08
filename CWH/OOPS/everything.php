<?php
// Abstract class
abstract class Vehicle {
    abstract public function start();
    abstract public function stop();
}

// Interface
interface ElectricVehicle {
    public function charge();
}

// Child class implementing the interface and extending the abstract class
class ElectricCar extends Vehicle implements ElectricVehicle {
    public function start() {
        return "Electric car started silently.";
    }

    public function stop() {
        return "Electric car stopped.";
    }

    public function charge() {
        return "Electric car is charging.";
    }
}

$car = new ElectricCar();
echo $car->start();  // Output: Electric car started silently.
echo $car->charge();  // Output: Electric car is charging.
?>
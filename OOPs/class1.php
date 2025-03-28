<?php

class Car{
    public $brand;
    public $colour;

    public function setBrand($brand){
        $this->brand= $brand;
    }
    public function getBrand(){
        return "This is a $this->brand";
    }
}

$car1= new Car();
$car1->setBrand("BMW");
echo $car1->getBrand();

?>
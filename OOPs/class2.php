<?php
// task create employee class
// create method setName
// set salary
// get salary
// set debt
// get debt
// take the input from user
// display values

class Car{
    public $name;

    public function __construct($seat){
        $this->seat= $seat;
    }
    public function seats(){
        return $this->seat;
    }
}
class Brand extends Car{ //inheritance

    public function drive(){
        return "Driving car having ".$this->seat." seats";

    }
}
$obj=new Brand(4);
echo $obj->drive();
?>
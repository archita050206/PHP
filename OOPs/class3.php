<?php
class ParentClass{
    function showMessage(){
        return "This is Parent Class\n";
    }

}
class ChildClass extends ParentClass{
    function showMessage(){
        return "This is Child Class";
    }

}
$obj= new ParentClass();
echo $obj->showMessage();
$obj1= new ChildClass();
echo $obj1->showMessage();
?>
<?php
function add($a,$b,$option){
    $sum=$a+$b;
    $prod=$a*$b;
    $div=$a/$b;
    $sub=$a-$b;
    switch($option){
        case '+':echo "Sum: ".$sum;
        break;
        case '-':echo "Difference: ".$sub;
        break;
        case '*':echo "Product: ".$prod;
        break;
        case '/':echo "Division: ".$div;
        break;
        default: echo "Invalid input";
    }
}

$a=(int)readline("Enter first number: ");
$b=(int)readline("Enter second number: ");
$option=(string)readline("Enter option: ");
add($a,$b,$option[0]);

$x=10;
$y="10";
if($x==$y)echo "equal";
else echo "no";
?>
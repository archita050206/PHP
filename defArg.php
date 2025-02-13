<?php
function numberOfChildren($children=0){
    echo "Total number of students are: $children\n";
}
function add(float $a, float $b){
    return (int)($a+$b);

}
numberOfChildren(5);
numberOfChildren(8);
numberOfChildren();
numberOfChildren(1);
echo add(1.2,4.5)."\n";

function selfMultiply(&$number){
    $number*=$number;
    return $number;
}
$mynum=5;
echo $mynum;
echo "\n";
selfMultiply($mynum);
echo "$mynum";
?>
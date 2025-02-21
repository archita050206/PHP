<?php
$courses=array("PHP","Laravel","Node js","HTML","CSS");
print_r(array_chunk($courses,2));
$arr=array("a"=>"PHP","b"=>"Laravel","c"=>"Node js");
print_r(array_chunk($arr,2,true));// true->preserve_key, it maintains the og index/key from the array
print_r(array_count_values($arr));// prints the number of times a value repeats in an array
$a1=array("red","green","blue");
$a2=array("red","yellow","pink","orange");
print_r(array_diff($a2,$a1));
$a3=array("a"=>"blue", "b"=>"green");
print_r(array_flip($a3));// flipping the key vakue pairs
print_r(array_intersect($a1,$a2));
print_r(array_merge($a1,$a2));
//array_pop -> deletes the last element
array_push($a3,"yellow","purple");
print_r(array_reverse($a3));
print_r(array_slice($a3,2,3));//slicing from the given index till the 2nd index

$result=array(array("name"=>"karan","roll"=>45),array("name"=>"archita","roll"=>46));
print_r(array_column($result,"name"));
?>m, 
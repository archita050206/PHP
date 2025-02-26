<?php

$length=(int)readline("Enter number of ele");
for($i=0;$i<$length;$i++){
    $arr[$i]=(int)readline();
}
array_push($arr,10);
$n=(int)readline("Enter position");
$key=(int)readline("Enter the element to insert");
$length=count($arr);$length++;
for($i=$length-1;$i>$n;$i--){
$arr[$i]=$arr[$i-1];

}
$arr[$n]=$key;
foreach($arr as $i){
    echo $i." ";
}
?>
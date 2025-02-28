<?php
$n=(int)readline("Enter number of elements: ");
$arr=[];
for($i=0;$i<$n;$i++){
$arr[$i]=readline();
}
$ans=array_count_values($arr);$max=0;

foreach($ans as $k=>$val){
if($val>$max)$max=$val;
}
foreach($ans as $k=>$val){
    if($val==$max){
        echo "$k is repeating most, i.e. $max times";
        break;
    }
}
?>
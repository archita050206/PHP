<?php
$arr=[];
$n=(int)readline("Enter number of elements: ");
for($i=0;$i<$n;$i++){
    $arr[$i]=(int)readline();
}
$key=(int)readline("Enter element to insert: ");
$index=(int)readline("Enter index: ");
$n++;
$arr[$n-1]=0;
if($index<$n && $index>=0){
    for($i=$n;$i>$index;$i--){
        $arr[$i]=$arr[$i-1];
    }
    $arr[$index]=$key;
}
for($i=0;$i<$n;$i++){
    echo $arr[$i]." ";
}

?>
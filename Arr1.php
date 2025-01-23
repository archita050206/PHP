<?php
$arr=[1,2,3,4,5,6,7,8,9];
$sum=0;
$length=count($arr);//to get the length of the array
for($i=0;$i<$length;$i++){
    $sum+=$arr[$i];
}
echo "Sum: $sum"."\n";
$len=(int)readline("Enter the length of the array: ");//reading user input
$arr1=[];
for($i=0;$i<$len;$i++){
    $arr1[$i]=(int)readline("Enter value");
}
for($i=0;$i<$len;$i++){
    echo $arr1[$i]." ";
}
$i=0;
while($i<$len){
    echo $arr[$i];
    $i++;
}
?>
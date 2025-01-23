<?php
$arr=[1,2,3,4,5,6,7,8,9];
$sum=0;
$length=count($arr);//to get the length of the array
for($i=0;$i<$length;$i++){
    $sum+=$arr[$i];
}
echo "Sum: $sum";
?>
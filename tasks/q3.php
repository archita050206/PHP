<?php
$arr=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];//30
$s=0;
foreach($arr as $i){
    $s+=$i;
}
$avg=$s/count($arr);
echo "Average is : $avg"."\n";
sort($arr);
echo "5 lowest temp: ";
for($i=0;$i<5;$i++){
    echo $arr[$i]." ";
}
echo "\n";
echo "5 lowest temp: ";
$length=count($arr);
for($i=$length-5;$i<$length;$i++){
    echo $arr[$i]." ";
}
?>
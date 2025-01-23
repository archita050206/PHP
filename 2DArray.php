<?php
$arr=[[1,2,3],[4,6],[7,8,9]];
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        echo $arr[$i][$j]." ";
    }
    echo "\n";
}
echo "\n";
$a=0;
$b=0;
foreach($arr as $a){
    foreach($a as $b){
        echo $b." ";
    }
    echo "\n";
}
?>
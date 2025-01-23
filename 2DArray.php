<?php
$arr=[];
$rows=(int)readline("enter number of rows: ");
$col=(int)readline("enter numer of columns: ");
for($i=0;$i<$rows;$i++){
    for($j=0;$j<$col;$j++){
        $arr[$i][$j]=(int)readline();
    }
}

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
$flag=false;
$key=(int)readline("Enter the element to search for: ");
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        if($arr[$i][$j]==$key){
            echo "Element at row $i and column $j";
            $flag=true;
            break;
        }

    }
}
if(!$flag)echo "Element not found!";
?>
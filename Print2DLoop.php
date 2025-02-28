<?php
$arr=[[]];
$row=(int)readline("Enter number of rows: ");
$col=(int)readline("Enter number of columns: ");
for($i=0;$i<$row;$i++){
for($j=0;$j<$col;$j++){
$arr[$i][$j]=(int)readline();

}
}
foreach($arr as $r){
    foreach($r as $ele){
        echo $ele." ";
    }
    echo "\n";
}
foreach($arr as &$r){
    foreach($r as &$ele){
        $ele*=2;
    }
    
}
//unset($r);
//unset($ele);
echo "\n";
foreach($arr as $r1){
    foreach($r1 as $ele1){
        echo $ele1." ";
    }
    echo "\n";
}
?>
<?php
$arr1=[[4,3,6],[5,2,1],[8,9,0]];
$arr2=[];
$c=0;
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $arr2[$c++]=$arr1[$i][$j];
    }
}
for($i=0;$i<$c-1;$i++){
    for($j=0;$j<($c-$i-1);$j++){
        if($arr2[$j]>$arr2[$j+1]){
            $t=$arr2[$j];
            $arr2[$j]=$arr2[$j+1];
            $arr2[$j+1]=$t;
        }
    }
}
foreach($arr2 as $k){
    echo $k." ";
}
echo "\n";
$count=0;
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $arr1[$i][$j]=$arr2[$count++];
    }
}
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $arr1[$i][$j]." ";
    }
    echo "\n";
}
?>
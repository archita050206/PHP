<?php
$n=5;
for($i=0;$i<$n;$i++){
    echo "*";
}
echo "\n";
for($j=0;$j<3;$j++){
for($i=0;$i<$n;$i++){
    if($i==0 || $i==($n-1)){
        echo "*";
    }
    else{
        echo " ";
       }
   
}
echo "\n";

}
for($i=0;$i<$n;$i++){
    echo "*";
}
?>
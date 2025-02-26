<?php
for($i=0;$i<5;$i++){
    for($j=0;$j<5-$i-1;$j++){
        echo " ";
    }
    for($k=0;$k<(2*$i+1);$k++){
        echo "*";
    }
    echo "\n";
}

?>
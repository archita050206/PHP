<?php
function remove($arr){
    return array_values(array_unique($arr));
     
}
$arr=array(10,20,10,20,30,30,40);
$ans=remove($arr);
print_r($ans);
?>
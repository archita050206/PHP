<?php
$array1=[1,3,2];
$array2=[5,4];
$ans=array_merge($array1,$array2);
sort($ans);
$str=implode(",",$ans);
echo "[$str]";
?>
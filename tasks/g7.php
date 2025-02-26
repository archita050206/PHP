<?php
$input=(string)readline("Enter word: ");//string
$toarr=explode(" ",$input);//string to array
$ans=implode($toarr);
echo $ans;
?>
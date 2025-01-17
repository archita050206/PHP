<?php
define("Greeting","Welcome to our website\n");
echo Greeting;
//Typecasting
$a=5;
$f1=(float)$a;
echo gettype($f1)."\n";
echo $f1."\n";

$dec=5.64;
$b=(integer)$dec;
echo gettype($b)."\n";
echo $b;
?>
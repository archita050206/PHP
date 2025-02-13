<?php
// include is used to run one php file in another file
echo "Hello"."\n";
include 'IfElse.php';
require 'IfElse.php';

//when the second file is deleted
//include: gives warning, full code executed, file is'nt compulsory
//require: error, partial code is executed, code beyond the error is not executed, file is compulsory
?>
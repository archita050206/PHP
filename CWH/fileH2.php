<?php
//Appending to a file
$fptr=fopen("myfile.txt",'a');
fwrite($fptr, " This will be appended");
fclose($fptr);

?>
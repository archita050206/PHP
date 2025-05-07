<?php

// $a= readfile("myfile.txt");
// echo $a;// a prints the number of characters in the file

//readfile("myfile.txt");
 $fptr= fopen("myfile.txt", "r");
 //echo var_dump($fptr);
if(!$fptr){
    die("Unable to open this file");
}
$content=fread($fptr, filesize("myfile.txt")); //the second parameter can be an integer as well

fclose($fptr);
echo $content;

echo "<br>for fgets: <br>";

$fptr2=fopen("myfile.txt", "r");// when 'w' is pased then the file becomes empty and whatever is written to it is overwritten
while($contentByLine=fgets($fptr2)){

echo $contentByLine."<br>";
}
fclose($fptr);


fwrite($fptr2,"This is new lineeeeeeeeeeeeee");
fclose($fptr2);
?>
<?php
$students=[
    ["name"=>"Alice", "marks"=>["math"=>85, "English"=> 90]],
    ["name"=>"Bob", "marks"=>["math"=>89, "English"=> 67]],
    ["name"=>"Charlie", "marks"=>["math"=>80, "English"=> 99]],
];
foreach($students as $student){
    $marks=$student["marks"];
    $average=array_sum($marks)/count($marks);
    echo $student ["name"].  "'s Average marks: ". round($average,2)."\n";
}

?>
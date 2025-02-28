<?php
$arr = [
    "Alice" => 85,
    "Bob" => 90,
    "Charlie" => 85,
    "David" => 92,
    "Eve" => 90,
    "Frank" => 78,
    "Grace" => 85
];
$ans=array_count_values($arr);
asort($arr);
foreach($arr as $name=>$marks){
    if($ans[$marks]>1){
        echo "Student $name with marks: $marks\n";
    }
}
?>
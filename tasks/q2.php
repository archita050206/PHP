<?php

// Associative array with names as keys and ages as values
$arr = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");

// Sorting by values in ascending order (BUT it removes keys, so not ideal for associative arrays)
asort($arr); // This converts the array into an indexed array (losing keys)
echo "After sort(): \n";
print_r($arr); // Keys are lost, only values remain in sorted order

// Sorting by values in descending order (AGAIN, keys are lost)
arsort($arr);
echo "After rsort(): \n";
print_r($arr); // Keys are lost again

// Sorting by keys in ascending order (Maintains keys)
ksort($arr);
echo "After ksort(): \n";
print_r($arr); // Sorted alphabetically by key names

// Sorting by keys in descending order (Maintains keys)
krsort($arr);
echo "After krsort(): \n";
print_r($arr); // Sorted in reverse alphabetical order by key names

?>

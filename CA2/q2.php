<?php
function calc($basicSalary,$bonus,$tax){
    $total=$basicSalary+$bonus;
    $ans=$total-(($total*10)/100);
    return $ans;
}
$basicSalary=(int)readline("Enter Basic Salary: ");
$bonus=(int)readline("Enter Bonus: ");
$tax=(int)readline("Enter Tax Percentage: ");
$value=calc($basicSalary,$bonus,$tax);
echo "Net Salary: Rs $value";
?>
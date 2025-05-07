<?php
//UPDATE STATEMENT
$username='root';
$servername='localhost';
$password="";
$port=3307;
$database='Students';
$conn=mysqli_connect($servername,$username, $password, $database,$port);

$sql="update students set name='Joysree' where state='West Bengal'";
$result=mysqli_query($conn,$sql);
$aff=mysqli_affected_rows($conn);

echo "Number of affected rows: ".$aff;
?>
<?php

$con=mysqli_connect('localhost','root','');//connection
if(!$con){
echo "Not connected";//verification of connection
}
if(!mysqli_select_db($con,'myform1')){
    echo "database not selected";//database insertion
}
$username=$_POST['username'];


$sql="INSERT INTO user(username) VALUES ('$username')";
if(mysqli_query($con,$sql)){
    echo "data inserted successfully";
}
?>
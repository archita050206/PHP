<?php
echo "YOOOOOOOOO";
$servername="localhost";
$username="root";
$password="";

// Creating a connection 
$conn=mysqli_connect($servername, $username, $password ,"Students", 3307 ); // if the port is default 3306, then only the first 3 parameters are given

//creating a database
//$sql="create database dataa";
//$result= mysqli_query($conn, $sql);
// if(!$result){
//     echo "Failed to create database";
// }
// else {
//     echo "Databae cretaed successfully";
// }


//die if connection not possible
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
echo "connection is successful<br>";

$roll=20;
$name="Diwakar";
$gender="male";
$state="Uttar Pradesh";



//inserting values into table
$sql="insert into students (roll, name, gender, state) values ('$roll', '$name', '$gender', '$state') ";
$result=mysqli_query($conn,$sql);
if(!$result)echo "Record was not inserted";
else{
echo "Result was inserted successfully".mysqli_error($conn);
}

?>
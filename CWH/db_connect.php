<?php
echo "YOOOOOOOOO";
$servername="localhost";
$username="root";
$password="";

// Creating a connection 
$conn=mysqli_connect($servername, $username, $password ,"", 3307 ); // if the port is default 3306, then only the first 3 parameters are given

//die if connection not possible
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
echo "connection is successful";

?>
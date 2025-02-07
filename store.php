<?php
//step 1: connection building (code and server)
//verification of connection
//select the database
//fetch data from form
// insert data into table
//verification of query successful
$con=mysqli_connect('localhost','root','');
if(!$con){
echo "Not connected";
}
if(!mysqli_select_db($con,'myform1')){
    echo "database not selected";
}
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$sql="INSERT INTO user(username,password,gender,phone) VALUES ('$username','$password','$gender','$phone','$age')";
if(mysqli_query($con,$sql)){
    echo "data inserted successfully";
}
//submit the data from our end: post (secure)
// get data from db: post
?>


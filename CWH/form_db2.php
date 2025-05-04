<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $state=$_POST['state'];
 
}

$servername='localhost';
$username='root';
$password="";
$port=3307;
$conn=mysqli_connect($servername, $username,$password,"Students",$port);
 if($conn){
   echo "Connected successfully!";
 }
 else{
    die("Connection failed".mysqli_connect_error());
 }
 $sql="insert into students(roll,name,gender,state) values('$roll','$name','$gender','$state')";

 $result=mysqli_query($conn,$sql);
 if($result){
    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Database Successfully Connected!</strong>
    
  </div>';
 }
 else{
    echo "Record not added!";
 }
?>
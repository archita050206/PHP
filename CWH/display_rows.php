<?php

//SELECT STATEMENT

$servername='localhost';
$username='root';
$password="";
$port=3307;
$conn=mysqli_connect($servername, $username,$password,"Students",$port);
 if(!$conn){
    die("Connection failed".mysqli_connect_error());
 }


 
 $sql="select * from students where state='Uttar Pradesh'";

 $result=mysqli_query($conn,$sql);
 if($result){
    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Details Successfully Added!</strong>
    
  </div>';
 }
 else{
     echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error: We are facing some technical issues, we will be back soon!</strong>
    
  </div>';
 }
$num=mysqli_num_rows($result);
while($num>0){
    $row=mysqli_fetch_assoc($result);
    echo "Student with roll: ".$row['roll']."and Name: ".$row['name']."<br>";
    $num--;

}



?>


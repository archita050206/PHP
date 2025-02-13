<?php
//database updation and database deletion
$con=mysqli_connect('localhost','root','');//connection
if(!$con){
echo "Not connected";//verification of connection
}
if(!mysqli_select_db($con,'myform1')){
    echo "database not selected";//database insertion
}
//$sql="UPDATE user set username='Maya' where phone='1233333333'";
$sql="DELETE from user where username='archita'";
if(mysqli_query($con,$sql)){
    echo "data uppdated successfully";
}
?>
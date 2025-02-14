<?php
// function used: mysql_num_rows, mysql_fetch_assoc

$arr=[a,b,c,d];

$con=mysqli_connect('localhost','root','');
if(!$con){
    echo "databbse not connected";
}
if(!mysqli_select_db($con,'myform1')){
    echo "database not selected";
}
$sql="select * from user";
$ans=mysqli_query($con, $sql);
if($ans){
echo "Query successful";
$rows=mysqli_num_rows($ans);// only number of rows
//echo "Number of rows: ".$rows;
while($row=mysqli_fetch_assoc($ans)){

    echo $row['username']." - ".$row['phone']."\n";
}
}
else{
    echo mysqli_error($con);
}
$con->close();
?>
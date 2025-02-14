<?php
session_start();
$_SESSION['name']='Archita';
echo $_SESSION['name']."\n";
echo "session is started"."\n";
$id=session_id();
echo "Session id is: $id";
//session_unset(); // value is removed after code so when we try to access it from session2, the variables are not available
//session_destroy();
$_SESSION['colours']=["red","green","blue","purple","orange"];

?>
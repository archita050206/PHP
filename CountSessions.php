<?php
session_start();
$_SESSION['count']=0;
if(empty($_SESSION['count'])){
    $_SESSION['count']=1;
}
else $_SESSION['count']++;
echo $_SESSION['count'];
?>
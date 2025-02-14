<?php
session_start();
$_SESSION['name']='Archita';
echo $_SESSION['name']."\n";
echo "session is started";
?>
<?php
//way of storing info across different pages
// example i login into insta and access an acc, I don't have to login again as my credentials have been saved and a session haas started

//verify the user login info
session_start();
$_SESSION['username']="Archita";
$_SESSION['favCat']="Clothes";
echo "we have saved you session";
?>
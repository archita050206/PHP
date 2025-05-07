<?php
echo "Welcome to the world of cookies<br>";

//a small file of info which is stored in the browser to identify them, used to store non-sensitive info 

setcookie("category","Books", time()+86400, "/");
//-> name, value assigned to name, expiration time, cookie accessible across whole domain

echo "The cookie is set";
?>
<?php
setcookie("username",$username,time()+(86400*30),'/'); // the path '/' is the default path
//expires in 30 days
echo "Cookies are set";
?>
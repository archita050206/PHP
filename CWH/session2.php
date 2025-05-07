<?php

//our sessions get saved in the super-global variable $_SESSION so i can open multiple files in the same domain and access them

session_start();
echo "Welcome to the website ".$_SESSION['username'];
echo "<br> Your favourite category is:  ".$_SESSION['favCat'];
echo "<br>";

?>
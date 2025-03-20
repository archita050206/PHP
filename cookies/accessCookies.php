<?php
if(isset($_COOKIE["username"])){ // if value is set in the username var
    echo "Welcome ".$_COOKIE["username"];

}
else{
    echo "Cookie not sent!";
}
?>
<?php
session_start();
if(session_status()===PHP_SESSION_NONE){// to check the status of the session
    session_start();
    echo "Session is started";
}
else{
    echo "Session is already started";
}
if(isset($_SESSION['name'])){
    echo "Welcome ". $_SESSION['name'];

}
else{
    echo 'No session found';
}
if(isset($_SESSION['colours'])){
    echo "Colours available"."\n";
    
    foreach ($_SESSION['colours'] as $colour) {
        echo $colour . " ";
    }
    }

?>
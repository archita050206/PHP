<?php

//$cat=$_COOKIE['category'];
//echo "here is the list of all $cat";



// Set cookies (name => value, expiry time in seconds, path)
//setcookie("user", "JohnDoe", time() + 3600, "/");   // Expires in 1 hour
//setcookie("email", "john@example.com", time() + 3600, "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Example</title>
</head>
<body>
    <h2>Cookie Status</h2>

    <?php
    // Check if cookies are set (on next request)
    if (count($_COOKIE) > 0) {
        echo "<h3>Cookies Found:</h3>";
        foreach ($_COOKIE as $name => $value) {
            echo "Name: " . htmlspecialchars($name) . " - Value: " . htmlspecialchars($value) . "<br>";
        }
    } else {
        echo "No cookies found. Please refresh the page.";
    }
    ?>
</body>
</html>

?>
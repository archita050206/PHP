
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = (int) $_GET['age'];

        echo "<h2>Received Data:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    } else {
        echo "Please provide both name and age.";
    }
} else {
    echo "Invalid request method.";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>GET Form Example</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form action="" method="get">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>

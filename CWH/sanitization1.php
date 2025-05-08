<!DOCTYPE html>
<html>
<head>
    <title>Sanitize Form Fields</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<h2>Input Sanitization & Validation Example</h2>

<?php
// Initialize variables
$email = $url = $number = $string = $password = "";
$emailError = $urlError = $numberError = $stringError = $passwordError = "";

// Process form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Raw values
    $raw_email = $_POST['email'];
    $raw_url = $_POST['url'];
    $raw_number = $_POST['number'];
    $raw_string = $_POST['text'];
    $raw_password = $_POST['password'];

    // Sanitize
    $email = filter_var($raw_email, FILTER_SANITIZE_EMAIL);
    $url = filter_var($raw_url, FILTER_SANITIZE_URL);
    $number = filter_var($raw_number, FILTER_SANITIZE_NUMBER_INT);
   $string = htmlspecialchars($raw_string, ENT_QUOTES); 
   $password = htmlspecialchars($raw_password, ENT_QUOTES);

     //Password validation
    if (strlen($password) < 6) {
       $passwordError = "Password must be at least 6 characters long.";
    } elseif (!preg_match('/[^a-zA-Z0-9]/', $password)) {
        $passwordError = "Password must contain at least one special character.";
    }



    // Display output if no password error
    if (empty($passwordError)) {
        echo "<h3>Sanitized Output:</h3>";
        echo "Email: $email <br>";
        echo "URL: $url <br>";
        echo "Number: $number <br>";
        echo "Text: $string <br>";
        echo "Password is valid.<br><br>";
    }
}
?>

<form method="post" action="">
    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

    <label>URL:</label><br>
    <input type="text" name="url" value="<?php echo htmlspecialchars($url); ?>"><br><br>

    <label>Number:</label><br>
    <input type="text" name="number" value="<?php echo htmlspecialchars($number); ?>"><br><br>

    <label>Text:</label><br>
    <input type="text" name="text" value="<?php echo htmlspecialchars($string); ?>"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br>
    <?php if ($passwordError): ?>
        <span class="error"><?php echo $passwordError; ?></span><br>
    <?php endif; ?>
    <br>

    <input type="submit" value="Submit">
</form>

</body>
</html>

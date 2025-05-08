<?php
// Define custom exception class
class MyException extends Exception {
    public function errorMessage() {
        // Custom error message
        return "Custom Error: " . $this->getMessage();
    }
}

// Function that may throw exception
function checkNumber($number) {
    if ($number > 100) {
        throw new MyException("Number cannot be greater than 100.");
    }
    return true;
}

// Using try-catch to handle custom exception
try {
    checkNumber(150);
    echo "Number is valid.";
} catch (MyException $e) {
    echo $e->errorMessage();
}
?>

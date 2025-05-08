<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 1. CREATE Table
$sql = "CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table 'users' created successfully<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}


// 2. INSERT Data
$sql = "INSERT INTO users (username, email, password) 
        VALUES ('john_doe', 'john.doe@example.com', 'password123')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}

// 3. SELECT Data
$sql = "SELECT id, username, email FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results<br>";
}

// 4. UPDATE Data
$sql = "UPDATE users SET password='new_password' WHERE username='john_doe'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully<br>";
} else {
    echo "Error updating record: " . mysqli_error($conn) . "<br>";
}

// 5. DELETE Data
$sql = "DELETE FROM users WHERE username='john_doe'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully<br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn) . "<br>";
}

// 6. TRUNCATE Data
$sql = "TRUNCATE TABLE users";
if (mysqli_query($conn, $sql)) {
    echo "Table truncated successfully<br>";
} else {
    echo "Error truncating table: " . mysqli_error($conn) . "<br>";
}

// 7. DROP Table
$sql = "DROP TABLE users";
if (mysqli_query($conn, $sql)) {
    echo "Table dropped successfully<br>";
} else {
    echo "Error dropping table: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>

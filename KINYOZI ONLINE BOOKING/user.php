<?php
// Database connection code
$host = "localhost";
$username = "root";
$password = "";
$database = "kinyozi online booking";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Assume the user ID is passed as a parameter in the URL
if (isset($_GET['user_email'])) {
    $user_email = $_GET['user_email'];

    // Fetch user information from the database
    $sql = "SELECT * FROM users WHERE email = $user_email";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row["username"];
        $password = $row["password"];
        // Add more user information fields as needed
    } else {
        echo "User not found";
    }
}

$connection->close();
?>

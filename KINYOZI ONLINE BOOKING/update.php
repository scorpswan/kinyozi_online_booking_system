<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database (replace with your database connection code)
    $db = new mysqli("localhost", "root", "", "kinyozi_db");

    // Check for database connection errors
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Retrieve and sanitize form data (replace with proper validation)
    $newUsername = $db->real_escape_string($_POST["newUsername"]);
    $newEmail = $db->real_escape_string($_POST["newEmail"]);
    $newPassword = password_hash($_POST["newPassword"], PASSWORD_BCRYPT);

    // Update user information in the database (replace with your database update code)
    $sql = "UPDATE users SET username='$newUsername', email='$newEmail', password='$newPassword' WHERE id=1"; // Modify the WHERE clause accordingly

    if ($db->query($sql) === TRUE) {
        header("Location: profile.php"); // Redirect to the user profile page
    } else {
        echo "Error updating user profile: " . $db->error;
    }

    // Close the database connection
    $db->close();
}
?>

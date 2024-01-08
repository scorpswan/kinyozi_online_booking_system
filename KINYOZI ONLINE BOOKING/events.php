<?php
// Connect to your database
$db = new mysqli("localhost", "your_username", "your_password", "your_database");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Fetch user-specific calendar events (customize the query)
$user_id = $_GET['user_id']; // Make sure to properly validate and sanitize this input

$events = array();
$sql = "SELECT id, title, start, end FROM user_events WHERE user_id = $user_id";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $events[] = array(
            'id' => $row['id'],
            'title' => $row['title'],
            'start' => $row['start'],
            'end' => $row['end'],
        );
    }
}

header('Content-Type: application/json');
echo json_encode($events);

$db->close();
?>

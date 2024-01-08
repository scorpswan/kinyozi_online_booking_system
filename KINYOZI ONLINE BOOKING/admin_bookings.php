<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Booking Management</title>
    <link rel="stylesheet" href="admin_bookings.css">
</head>
<body>
    <div class="container">
        <h1>Admin Booking Management</h1>
        <div class="booking-list">
            <h2>Bookings</h2>
            <?php
            // Simulating booking data retrieval from a database
            $bookings = [
                ['id' => 1, 'user' => 'John Doe', 'date' => '2023-11-25'],
                ['id' => 2, 'user' => 'Jane Smith', 'date' => '2023-12-03'],
                // Add more booking entries as needed
            ];

            if (!empty($bookings)) {
                echo '<table>';
                echo '<tr><th>Booking ID</th><th>User</th><th>Date</th><th>Action</th></tr>';
                foreach ($bookings as $booking) {
                    echo '<tr>';
                    echo '<td>' . $booking['id'] . '</td>';
                    echo '<td>' . $booking['user'] . '</td>';
                    echo '<td>' . $booking['date'] . '</td>';
                    echo '<td><a href="modify_booking.php?id=' . $booking['id'] . '">Modify</a></td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>No bookings found.</p>';
            }
            ?>
        </div>
    </div>
</body>
</html>

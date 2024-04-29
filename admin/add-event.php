<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, date, description FROM events";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div class='card' data-name='" . htmlspecialchars($row['name'], ENT_QUOTES) . "' data-description='" . htmlspecialchars($row['description'], ENT_QUOTES) . "' data-date='" . $row['date'] . "'>
        <div class='card-row'>
            <div class='card-left-col'>
                <img src='./icons/event-icon.png'>
            </div>
            <div class='card-right-col'>
                <div class='event-title'>" . $row['name'] . "</div>
                <div class='event-description'>" . $row['description'] . "</div>
                <div class='event-date'>" . $row['date'] . "</div>
                <div class='event-actions'>
                    <!-- Update button -->
                    <a href='update-event.php?id=" . $row['id'] . "' class='btn btn-primary'>Update</a>
                    <!-- Delete button -->
                    <button class='btn btn-danger delete-event' data-id='" . $row['id'] . "'>Delete</button>
                </div>
            </div>
        </div>
      </div>";

    }
} else {
    echo "0 results";
}
?>
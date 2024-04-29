<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "volunteer2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$date = $_POST['date'];
$description = $_POST['description'];

// SQL to insert data
$sql = "INSERT INTO events (name, date, description) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die('MySQL prepare error: ' . $conn->error);
}
$stmt->bind_param("sss", $name, $date, $description);
if ($stmt->execute()) {
    echo "New event added successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
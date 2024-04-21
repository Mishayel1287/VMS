<?php

// Database connection parameters
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "";

// Connect to the database 
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch KPI data from the database
$sql = "SELECT kpi_name, value FROM kpi_table";
$result = $conn->query($sql);

// Convert data to JSON format
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'kpi_name' => $row['kpi_name'],
            'value' => $row['value']
        ];
    }
}

// Close database connection
$conn->close();

// Output JSON response
header('Content-Type: application/json');
echo json_encode($data);

?>

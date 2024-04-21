<?php
include_once "db_connection.php";

function fetchUsers() {
    global $conn;
    $sql = "SELECT id, username, email, created_at FROM signup1"; // We omit the password for security reasons
    $result = $conn->query($sql);
    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }
    return $result;
}

function displayUsers($result) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<form method='POST' action='handle_users.php'>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['created_at']) . "</td>"; // Displaying created_at
        echo "<td>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit' name='action' value='update'>Update</button>";
        echo "<button type='submit' name='action' value='delete'>Delete</button>";
        echo "</td>";
        echo "</form>";
        echo "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="content-users">
    <h2>User Management</h2>
    <div class="user-table">
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Registered</th>
                <th>Actions</th>
            </tr>
            <?php displayUsers(fetchUsers()); ?>
        </table>
    </div>
</div>

</body>
</html>

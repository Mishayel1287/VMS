<?php
include_once "db_connection.php";

function fetchVolunteers($tableName) {
    global $conn;
    $sql = "SELECT * FROM " . $tableName;
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error executing the query: " . $conn->error);
    }

    return $result;
}

function displayVolunteers($result, $type) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<form method='POST' action='handle_volunteers.php'>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['city']) . "</td>";
        echo "<td>" . htmlspecialchars($row['phoneNo']) . "</td>";
        if ($type === 'individual') {
            echo "<td>" . htmlspecialchars($row['interest']) . ", " . htmlspecialchars($row['otherInterests']) . "</td>";
            echo "<td>" . htmlspecialchars($row['talent']) . "</td>";
            echo "<td>" . "Leadership: " . htmlspecialchars($row['leadership']) . ", Communication: " . htmlspecialchars($row['communication']) . ", Management: " . htmlspecialchars($row['management']) . ", etc." . "</td>";
        } elseif ($type === 'organization') {
            echo "<td>" . htmlspecialchars($row['interest']) . ", " . htmlspecialchars($row['otherInterests']) . "</td>";
            echo "<td></td>"; // Placeholder for missing column
        }
        echo "<td>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<input type='hidden' name='type' value='" . $type . "'>";
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
    <title>Manage Volunteers</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="content-volunteers">
    <h2>Individual Volunteers</h2>
    <div class="volunteer-table">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Phone No</th>
                <th>Interests</th>
                <th>Talent</th>
                <th>Skills</th>
                <th>Actions</th>
            </tr>
            <?php displayVolunteers(fetchVolunteers('individualprofile'), 'individual'); ?>
        </table>
    </div>
</div>

<div class="content-volunteers">
    <h2>Organization Volunteers</h2>
    <div class="volunteer-table">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Phone no</th>
                <th>Interests</th>
                <th>Actions</th>
            </tr>
            <?php displayVolunteers(fetchVolunteers('organizationprofile'), 'organization'); ?>
        </table>
    </div>
</div>

</body>
</html>

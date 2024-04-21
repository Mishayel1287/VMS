<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="sidebar">
<div class="profile">
    <img src="assets/logo.png" alt="Profile Image">
</div>
  <a href="admin.php">Dashboard</a>
  <a href="manage_volunteers.php">Manage Volunteers</a>
  <a href="manage_events.php">Manage Events</a>
  <a href="manage_users.php">User Management</a>
</div>

<div class="content">
  <h2>Admin Panel</h2>
</div>
  <div class="cont">
    
  
    <div class="dashboard-section">
        <h3>Manage Volunteers</h3>
        <a href="manage_volunteers.php" class="btn btn-primary">Volunteers</a>
    </div>

    <div class="dashboard-section">
        <h3>Manage Events</h3>
        <a href="manage_events.php" class="btn btn-primary">Events</a>
    </div>
    
    <div class="dashboard-section">
        <h3>User Management</h3>
        <a href="manage_users.php" class="btn btn-primary">Users</a>
    </div>
  </div>

</body>
</html>

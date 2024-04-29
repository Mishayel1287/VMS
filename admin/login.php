<?php
session_start(); // It's best to start session at the beginning of the script
$login = false;
include('connection.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']); // Use mysqli_real_escape_string to prevent SQL Injection
    $password = $_POST['pass'];

    // Use prepared statements for better security
    $sql = "SELECT * FROM adminlogin WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($row) {
        // Compare plaintext password
        if ($password === $row["password"]) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;

            // Redirect to another page on successful login
            header("Location: /GroupProject/admin/admin.php"); // Adjust the path as necessary
            exit; // Always call exit after header redirection
        } else {
            $login_failed = true; // To use later for error message
        }
    } else {
        $login_failed = true; // To use later for error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script>
        // Function to show login success message
        function showLoginSuccess() {
            alert("Login successful!");
        }
    </script>
</head>
<body>
    <br><br>
    <div id="form">
        <h1 id="heading">Admin Login</h1>
        <?php if (isset($login_failed) && $login_failed): ?>
            <p class="alert alert-danger">Login failed. Invalid username or password!</p>
        <?php endif; ?>
        <form name="form" action="login.php" method="POST" onsubmit="showLoginSuccess()" required>
            <label>Enter Username/Email: </label>
            <input type="text" id="user" name="user" required></br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="pass" required></br></br>
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
</body>
</html>

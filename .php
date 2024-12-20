<?php
// dashboard.php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site_login.css">
    <title>Dashboard</title>
</head>
<body>
    <nav>
        <ul>
            <li class="left-aligned">Dashboard</li>
            <ul class="right-aligned">
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </ul>
    </nav>
    <div class="login-container">
        <h2>Welcome to your dashboard!</h2>
    </div>
</body>
</html>

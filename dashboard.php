<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav>
    <img class="logo" src="images/logo.png" alt="logo">
        <ul>
            <li><a href="">Log Out</a></li> <!-- Add a function to destroy the session to log out the user -->
        </ul>
</nav>
<header>
        <div>
            <button class="dashboard-btn">Get Users</button>
        </div>
    </header>
</body>
</html>
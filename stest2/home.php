<?php
    session_start();
    if( isset($_SESSION["username"]) == false ){
        header("location: login.php");
        exit(0);
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Application - Home</title>
</head>
<body>
    <h1>Home Page</h1>
    <div>
        <a>Home</a> | 
        <a href="select.php">Students</a> | 
        <a href="settings.php">Settings</a> | 
        <a href="logout.php">Logout</a>
    </div>
    <div>
        <?php 
            $username = $_SESSION['username'];
            echo "Welcome <b>$username</b>"; 
        ?>
    </div>
</body>
</html>
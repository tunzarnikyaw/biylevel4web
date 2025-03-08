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
    <title>My Web Application - Settings</title>
</head>
<body>
    <h1>Settings Page</h1>
    <div>
        <a href="home.php">Home</a> | 
        <a>Settings</a> | 
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
<?php
    session_start();

    if( isset($_SESSION["username"]) == true ){
        header("location: home.php");
        exit(0);
    }

    $errmsg = "";
    if( isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if( $username == "user" && $password == "123" ){
            $_SESSION["username"] = $username;
            header("location: home.php");
            exit(0);
        }
        else{
            $errmsg = "Invalid Username and/or Password!";
        }
    } 
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web Application - Login</title>
    <style>
        .errmsg{
            color: #ff0000;
        }
    </style>
</head>
<body>
    <h1>My Web Application - Login</h1>
    <div>
        <form action="" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
            <div>
                <p class="errmsg"><?php echo $errmsg; ?></p>
            </div>
            <div>
                <p>Don't have an account? Create new <a href="register.php">here</a>!</p>
            </div>
        </form>
    </div>
</body>
</html>
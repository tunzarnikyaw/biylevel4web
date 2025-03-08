<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 1)</title>
</head>
<body>
    <h1>Draw Table (Step 1)</h1>
    <div>
        <a>Step 1</a> | 
        <a href="s2.php">Step 2</a> | 
        <a href="s3.php">Step 3</a> | 
        <a href="s4.php">Step 4</a>
    </div>
    <hr>
    <form action="s2.php" method="get">
        <div>
            <label for="row">Row:</label>
            <input type="number" name="row" id="row" min="1" max="100" value="">
        </div>
        <div>
            <label for="col">Column:</label>
            <input type="number" name="col" id="col" min="1" max="100" value="">
        </div>
        <div>
            <input type="submit" value="Next">
        </div>
    </form>
    <hr>
</body>
</html>
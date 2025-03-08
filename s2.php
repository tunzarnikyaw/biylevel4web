<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 2)</title>
    <?php
        $row = "";
        $col = "";
        if( isset($_GET["row"]) && isset($_GET["col"]) ){
            $row = $_GET["row"];
            $col = $_GET["col"];

            $_SESSION["row"] = $row;
            $_SESSION["col"] = $col;
        }
    ?>
</head>
<body>
    <h1>Draw Table (Step 2)</h1>
    <div>
        <a href="s1.php">Step 1</a> | 
        <a>Step 2</a> | 
        <a href="s3.php">Step 3</a> | 
        <a href="s4.php">Step 4</a>
    </div>
    <hr>
    <form action="s3.php" method="get">
        <div>
            <label for="content">Content:</label>
            <select name="content" id="content">
                <option value="1">Row, Column</option>
                <option value="2">Random Numbers</option>
                <option value="3">Serial Numbers</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Next">
        </div>
    </form>
    <hr>
</body>
</html>
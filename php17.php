<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 02</title>
    <?php
        $a = "";
        $b = "";
        if( isset($_GET["n1"]) && isset($_GET["n2"]) ){
            $a = $_GET["n1"];
            $b = $_GET["n2"];
            $c = $a + $b;    
        }
    ?>
</head>
<body>
    <h1>HTML Form and PHP</h1>
    <form action="" method="get">
        <div>
            <label for="n1">Number 1:</label>
            <input type="text" name="n1" value="<?php echo $a; ?>">
        </div>
        <div>
            <label for="n2">Number 2:</label>
            <input type="text" name="n2" value="<?php echo $b; ?>">
        </div>
        <div>
            <input type="submit" value="Calculate">
        </div>
        <div>
            <p>
                <?php 
                    if( isset($_GET["n1"]) && isset($_GET["n2"]) ){
                        echo $c;
                    } 
                ?>
            </p>
        </div>
    </form>
</body>
</html>
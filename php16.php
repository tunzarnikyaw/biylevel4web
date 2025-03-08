<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Line</title>
    <?php
        $n = "";
        if( isset($_GET["n"]) ){
            $n = $_GET["n"];
        }
    ?>
</head>
<body>
    <form action="" method="get">
        <div>
            <label for="n">How many lines do you want?</label>
            <input type="text" name="n" id="n" value="<?= $n ?>">
        </div>
        <div>
            <input type="submit" value="Draw">
        </div>
    </form>
    <?php
        if( isset($_GET["n"]) ){
            $n = $_GET["n"];

            for($i=1; $i<=$n; $i++){
                echo "$i <hr>";
            }    
        }
    ?>
</body>
</html>
<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 3)</title>
    <script>
        function checkboxclick(){
            document.getElementById("hborder").value = document.getElementById("border").checked;
        }
    </script>
    <?php
        $content = "";

        if( 
            isset($_GET["content"]) 
        ){
            $content = $_GET["content"];
            $_SESSION["content"] = $content;
        }
    ?>
</head>
<body>
    <h1>Draw Table (Step 3)</h1>
    <div>
        <a href="s1.php">Step 1</a> | 
        <a href="s2.php">Step 2</a> | 
        <a>Step 3</a> | 
        <a href="s4.php">Step 4</a>
    </div>
    <hr>
    <form action="s4.php" method="get">
        <div>
            <label for="border">Show Border:</label>
            <input type="checkbox" id="border" onclick="checkboxclick()" >
            <input type="hidden" name="border" id="hborder" value="">
        </div>
        <div>
            <label for="">Alignment:</label>
            <input type="radio" name="alignment" id="left" value="left" ><label for="left">Left</label>
            <input type="radio" name="alignment" id="center" value="center" ><label for="center">Center</label>
            <input type="radio" name="alignment" id="right" value="right" ><label for="right">Right</label>
        </div>
        <div>
            <input type="submit" value="Next">
        </div>
    </form>
    <hr>
</body>
</html>
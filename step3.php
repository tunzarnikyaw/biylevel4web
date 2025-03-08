<!DOCTYPE html>
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
        $row = "";
        $col = "";
        $content = "";

        if( 
            isset($_GET["row"]) && 
            isset($_GET["col"]) &&
            isset($_GET["content"]) 
        ){
            $row = $_GET["row"];
            $col = $_GET["col"];
            $content = $_GET["content"];
        }
    ?>
</head>
<body>
    <h1>Draw Table (Step 3)</h1>
    <form action="step4.php" method="get">
        <input type="hidden" name="row" value="<?= $row ?>">
        <input type="hidden" name="col" value="<?= $col ?>">
        <input type="hidden" name="content" value="<?= $content ?>">
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
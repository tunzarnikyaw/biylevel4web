<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 2)</title>
    <?php
        $row = "";
        $col = "";
        if( isset($_GET["row"]) && isset($_GET["col"])){
            $row = $_GET["row"];
            $col = $_GET["col"];
        }
    ?>
</head>
<body>
    <h1>Draw Table (Step 2)</h1>
    <form action="step3.php" method="get">
        <input type="hidden" name="row" value="<?= $row ?>">
        <input type="hidden" name="col" value="<?= $col ?>">
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
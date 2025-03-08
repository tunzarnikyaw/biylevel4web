<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 1)</title>
</head>
<body>
    <h1>Draw Table (Step 1)</h1>
    <form action="step2.php" method="get">
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
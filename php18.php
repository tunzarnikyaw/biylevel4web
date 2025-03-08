<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form and PHP</title>
</head>
<body>
    <h1>Draw Table</h1>
    <form action="" method="get">
        <div>
            <label for="row">Row:</label>
            <input type="number" name="row" id="row" value="">
        </div>
        <div>
            <label for="col">Column:</label>
            <input type="number" name="col" id="col" value="">
        </div>


        <div>
            <input type="submit" value="Draw Table">
        </div>
    </form>
    <hr>

    <?php
        $row = $_GET["row"];
        $col = $_GET["col"];

        echo "<table border='1' cellspacing='0'>";
        for($r=1; $r<=$row; $r++){
            echo "  <tr>";
            for($c=1; $c<=$col; $c++){
                echo "<td>";
                echo "$r, $c";
                echo "</td>";
            }
            echo "  </tr>";
        }
        echo "</table>";
    ?>

    <!-- <table border="1" cellspacing="0">
        <tr>
            <td>A</td><td>B</td><td>C</td>
        </tr>
        <tr>
            <td>D</td><td>E</td><td>F</td>
        </tr>
    </table> -->

</body>
</html>
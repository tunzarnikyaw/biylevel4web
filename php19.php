<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form and PHP</title>
    <script>
        function checkboxclick(){
            document.getElementById("hborder").value = document.getElementById("border").checked;
        }
    </script>
    <?php
        $row        = "";
        $col        = "";
        $content    = "";
        $border     = "";
        $alignment  = "";

        if( 
            isset($_GET["row"]) && 
            isset($_GET["col"]) && 
            isset($_GET["content"]) && 
            isset($_GET["border"]) && 
            isset($_GET["alignment"]) 
        ){
            $row        = $_GET["row"];
            $col        = $_GET["col"];
            $content    = $_GET["content"];
            $border     = $_GET["border"];
            $alignment  = $_GET["alignment"];
    
        }

    ?>
</head>
<body>
    <h1>Draw Table</h1>
    <form action="" method="get">
        <div>
            <label for="row">Row:</label>
            <input type="number" name="row" id="row" min="1" max="100" value="<?php echo $row; ?>">
        </div>
        <div>
            <label for="col">Column:</label>
            <input type="number" name="col" id="col" min="1" max="100" value="<?php echo $col; ?>">
        </div>
        <div>
            <label for="content">Content:</label>
            <select name="content" id="content">
                <option value="1" <?php echo $content=="1"?"selected='selected'":""; ?>>Row, Column</option>
                <option value="2" <?php echo $content=="2"?"selected='selected'":""; ?>>Random Numbers</option>
                <option value="3" <?php echo $content=="3"?"selected='selected'":""; ?>>Serial Numbers</option>
            </select>
        </div>
        <div>
            <label for="border">Show Border:</label>
            <input type="checkbox" id="border" onclick="checkboxclick()" <?php echo $border=="true"?"checked='checked'":"" ?>>
            <input type="hidden" name="border" id="hborder" value="<?php echo $border=="true"?"true":"false" ?>">
        </div>
        <div>
            <label for="">Alignment:</label>
            <input type="radio" name="alignment" id="left" value="left" <?php echo $alignment=="left"?"checked='checked'":"" ?>><label for="left">Left</label>
            <input type="radio" name="alignment" id="center" value="center" <?php echo $alignment=="center"?"checked='checked'":"" ?>><label for="center">Center</label>
            <input type="radio" name="alignment" id="right" value="right" <?php echo $alignment=="right"?"checked='checked'":"" ?>><label for="right">Right</label>
        </div>
        <div>
            <input type="submit" value="Draw Table">
        </div>
    </form>
    <hr>

    <?php
        // if( $border == "true" ) $border = "1";
        // else $border = "0";

        // $border = ($border=="true")  ?  ("1")   :  ("0");

        $border = $border=="true"  ?  "1"  :  "0";

        $number = 1;
        echo "<table border='$border' cellspacing='0' align='$alignment'>";
        for($r=1; $r<=$row; $r++){
            echo "  <tr>";
            for($c=1; $c<=$col; $c++){
                echo "<td>";
                if( $content == "1"){
                    echo "$r, $c";
                }
                else if( $content == "2"){
                    echo rand(1, 100);
                }
                else{
                    echo $number++;
                }
                echo "</td>";
            }
            echo "  </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
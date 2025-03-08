<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Table (Step 4)</title>
</head>
<body>
    <h1>Draw Table (Finish)</h1>
    <hr>
    <?php
        $row        = $_GET["row"];
        $col        = $_GET["col"];
        $content    = $_GET["content"];
        $border     = $_GET["border"];
        $alignment  = $_GET["alignment"];

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
<?php
    function draw_table($row, $col){
        echo "<table border='1'>";
        for($r=1; $r<=$row; $r++){
            echo "  <tr>";
            for($c=1; $c<=$col; $c++){
                echo "      <td>$r, $c</td>";
            }
            echo "  </tr>";    
        }
        echo "</table>";
    }

    echo "Hello<br>";
    draw_table(3, 2);
    echo "Hi<br>";
    draw_table(5, 10);

?>
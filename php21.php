<?php
    function draw_table($b){
        echo "<table border='$b'>";
        echo "  <tr>";
        echo "      <td>A</td><td>B</td><td>C</td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td>D</td><td>E</td><td>F</td>";
        echo "  </tr>";
        echo "</table>";
    }

    echo "Hello<br>";
    draw_table(1);
    echo "Hi<br>";
    draw_table(0);

?>
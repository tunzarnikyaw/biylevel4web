<?php
    $con = mysqli_connect("localhost", "root", "", "school");
    $result = mysqli_query($con, "SELECT * FROM `student`");

    $r = $result->num_rows;
    $c = $result->field_count;
    $fields = mysqli_fetch_fields($result);
    echo "<table border='1'>";
    echo "<tr>";
    for($i=0; $i<$c; $i++){
        echo "<td>" . $fields[$i]->name . "</td>";
    }
    echo "</tr>";
    for($i=1; $i<=$r; $i++){
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for($j=0; $j<$c; $j++){
                echo "<td>$row[$j]</td>";
            }
        echo "</tr>";
    }
    echo "</table>";

    echo "Total $r student(s).";

    mysqli_close($con);
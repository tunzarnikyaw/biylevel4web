<?php
    $con = mysqli_connect("localhost", "root", "", "school");
    $result = mysqli_query($con, "SELECT * FROM `student`");

    $n = $result->num_rows;

    for($i=1; $i<=$n; $i++){
        $row = mysqli_fetch_row($result);
        echo "$row[0], $row[1], $row[2], $row[3], $row[4] <hr>";    
    }

    echo "Total $n student(s).";

    mysqli_close($con);
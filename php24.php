<?php
    $con = mysqli_connect("localhost", "root", "", "school");
        // mysqli_connect("server_name", "username", "password", "database_name")

    $result = mysqli_query($con, "SELECT * FROM `student`");
           // mysqli_query(connection_object, "SQL query")

    $row = mysqli_fetch_row($result);
        // mysqli_fetch_row(result_object)
    
    var_dump($con);
    echo "<hr>";

    var_dump($result);
    echo "<hr>";

    var_dump($row);
    echo "<hr>";

    echo "$row[0], $row[1], $row[2], $row[3], $row[4]";

    mysqli_close($con);
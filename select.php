<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
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
    echo "<td></td><td></td>";
    echo "</tr>";
    for($i=1; $i<=$r; $i++){
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for($j=0; $j<$c; $j++){
                echo "<td>$row[$j]</td>";
            }
            echo "<td><a href='edit.php?sno=$row[0]'>Edit</a></td>";
            echo "<td><a href='delete.php?sno=$row[0]'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "Total $r student(s).";

    mysqli_close($con);
?>    
</body>
</html>

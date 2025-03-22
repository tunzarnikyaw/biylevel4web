<?php
    session_start();
    if( isset($_SESSION["username"]) == false ){
        header("location: login.php");
        exit(0);
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <script>
        function delete_student(sno){
            let c = confirm("Delete sno=" + sno + " ?");
            if( c == true ){
                location.href = "delete.php?sno=" + sno;
            }
        }
    </script>
</head>
<body>
    <h1>Students</h1>
    <div>
        <a href="home.php">Home</a> | 
        <a>Students</a> | 
        <a href="settings.php">Settings</a> | 
        <a href="logout.php">Logout</a>
    </div>
    <div><p><a href="insert.php">Add New Student</a></p></div>
    <div>
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
            echo "<td><a href='javascript:delete_student($row[0])'>Delete</a></td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "Total $r student(s).";

    mysqli_close($con);
    ?>
    </div>
</body>
</html>

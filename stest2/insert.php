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
    <title>Add New Student</title>
</head>
<body>
<?php
    $sno = "";
    $sname = "";
    $age = "";
    $gender = "";
    $mark = "";

    $msg = "";
    $errmsg = "";

    if( isset($_POST["sno"]) && isset($_POST["sname"]) && isset($_POST["age"]) && 
        isset($_POST["gender"]) && isset($_POST["mark"]) 
    ){
        $sno    = $_POST["sno"];
        $sname  = $_POST["sname"];
        $age    = $_POST["age"];
        $gender = $_POST["gender"];
        $mark   = $_POST["mark"];

        try{
            $con = mysqli_connect("localhost", "root", "", "school");
            $result = mysqli_query($con, "INSERT INTO `student` VALUES('$sno', '$sname', '$age', '$gender', '$mark');");
            mysqli_close($con);
            $msg = "Successfully saved!";
            $sno = "";
            $sname = "";
            $age = "";
            $gender = "";
            $mark = "";        
        }
        catch(Exception $e){
            $errmsg = $e->getMessage();
        }
    }
?>
    <h1>Add New Student</h1>
    <div><p><a href="select.php">Student List</a></p></div>
    <form action="" method="post">
        <div>
            <label for="sno">Student No.:</label>
            <input type="text" name="sno" id="sno" value="<?=$sno?>">
        </div>
        <div>
            <label for="sname">Student Name:</label>
            <input type="text" name="sname" id="sname" value="<?=$sname?>">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" value="<?=$age?>">
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
                <option value="M" <?= $gender=="M"?"selected='selected'":"" ?>>Male</option>
                <option value="F" <?= $gender=="F"?"selected='selected'":"" ?>>Female</option>
                <option value="U" <?= $gender=="U" || $gender==""?"selected='selected'":"" ?>>Unspecified</option>
            </select>
        </div>
        <div>
            <label for="mark">Mark:</label>
            <input type="number" name="mark" id="mark" value="<?=$mark?>">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
    <div style="color: red;"><?php echo "$errmsg"; ?></div>
    <div style="color: green;"><?php echo "$msg"; ?></div>
</body>
</html>
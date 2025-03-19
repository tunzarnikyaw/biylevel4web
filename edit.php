<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
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

    if( isset($_GET["sno"]) ){
        $sno = $_GET["sno"];
        $con = mysqli_connect("localhost", "root", "", "school");
        $result = mysqli_query($con, "SELECT * FROM `student` WHERE `sno`='$sno'");
        $row = mysqli_fetch_row($result);
        $sname = $row[1];
        $age = $row[2];
        $gender = $row[3];
        $mark = $row[4];
        mysqli_close($con);
    }

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
            
            $result = mysqli_query($con, 
            "UPDATE `student` SET `sname`='$sname', `age`='$age', `gender`='$gender', 
            `mark`='$mark' WHERE `sno`='$sno';");

            mysqli_close($con);
            $msg = "Successfully updated!";
            // header("location: select.php");
            // exit(0);
        }
        catch(Exception $e){
            $errmsg = $e->getMessage();
        }
    }

?>
    <h1>Update Student</h1>
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
            <input type="submit" value="Update">
        </div>
    </form>
    <div style="color: red;"><?php echo "$errmsg"; ?></div>
    <div style="color: green;"><?php echo "$msg"; ?></div>    
</body>
</html>
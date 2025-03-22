<?php
    session_start();
    if( isset($_SESSION["username"]) == false ){
        header("location: login.php");
        exit(0);
    }
?><?php
    $sno = $_GET["sno"];

    $con = mysqli_connect("localhost", "root", "", "school");
    $result = mysqli_query($con, "DELETE FROM `student` WHERE `sno`='$sno'");
    mysqli_close($con);

    header("location: select.php");
    exit(0);
<?php

if(isset($_POST['uname'])){

    require("connection.php");

    $statement = $mysqli->prepare("INSERT INTO tbl_user (username, password, userlevel, s_lname, s_fname, s_mname) VALUES (?,?,?,?,?,?)");
    if (!$statement) {
        echo "NO SQL Prepared";
    }

    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $ulevel = $_POST['ulevel'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];

    $statement->bind_param("ssssss", $uname, $pword, $ulevel, $lname, $fname, $mname);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();
}
?>
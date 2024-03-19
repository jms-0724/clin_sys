<?php

if(isset($_POST['lname'])) {

    require("connection.php");

    $statement = $mysqli->prepare("INSERT INTO tbl_patient (pat_lname, pat_fname, pat_mname, pat_gender, pat_age, pat_mun, pat_bar, pat_cpnum) VALUES (?,?,?,?,?,?,?,?)");
    if (!$statement) {
        echo "NO SQL Prepared";
    }
    
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $town = $_POST['town'];
    $brgy = $_POST['brgy'];
    $cnumber = $_POST['cnumber'];


    $statement->bind_param("ssssssss", $lname, $fname, $mname, $gender, $age, $town, $brgy, $cnumber);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();
};
?>
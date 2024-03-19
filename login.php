<?php
require("connection.php");

if(isset($_POST['uname'])){
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    $stmt = $mysqli->prepare("SELECT * FROM tbl_user WHERE username = '$uname' AND password = '$pword'");
    if (!$stmt) {
        echo "NO Statement Prepared";
    }

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $uname_res = $row['username'];
        $pword_res = $row['password'];
        $ulevel = $row['userlevel'];

        if ($ulevel === "Administrator"){
            echo "admin";
        } elseif ($ulevel === "Doctor") {
            echo "doctor";
        } elseif ($ulevel === "Pharmacist") {
            echo "pharmacist";
        } 
    } else {
        echo "error";
    }
}
?>
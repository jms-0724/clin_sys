<?php

if(isset($_POST['medname'])) {

    require("connection.php");

    $statement = $mysqli->prepare("INSERT INTO tbl_medicine (m_name, m_class, m_quantity) VALUES (?,?,?)");
    if (!$statement) {
        echo "NO SQL Prepared";
    }
    $medname = $_POST['medname'];
    $mclass = $_POST['mclass'];
    $quantity = $_POST['quantity'];


    $statement->bind_param("sss", $medname, $mclass, $quantity);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();
};
?>
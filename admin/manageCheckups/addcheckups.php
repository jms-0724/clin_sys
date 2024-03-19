<?php
require("connection.php");
if(isset($_POST['pat_id'])){
	$pat_id=$_POST['pat_id'];
	$sql="SELECT * FROM tbl_patient WHERE pat_id = '$pat_id'";
	$result=$mysqli->query($sql);
	$response=array();
	foreach ($mysqli->query($sql) as $row) {
		$response=$row;
	}
	echo json_encode($response);
}else{
	$response['status']=200; //200 means ok
	$response['message']="Invalid or data not found";
}

if(isset($_POST['chkpat'])){

    require("connection.php");

    $statement = $mysqli->prepare("INSERT INTO tbl_checkup (c_number, c_day, c_month, c_year, temperature, bp_sys, bp_dia, symptom, physical_remarks, pat_id) VALUES (?,?,?,?,?,?,?,?,?,?)");
    if (!$statement) {
        echo "NO SQL Prepared";
    }
	$cnumber = $_POST['chknumber'];
	$chkmonth = $_POST['chkmonth'];
	$chkday = $_POST['chkday'];
	$chkyear = $_POST['chkyear'];
	$temp = $_POST['temp'];
	$systole = $_POST['systole'];
	$diastole = $_POST['diastole'];
	$symptoms = $_POST['symptoms'];
	$ph_remarks = $_POST['ph_remarks'];
	$chkpat = $_POST['chkpat'];

    $statement->bind_param("isssssssss", $cnumber, $chkday, $chkmonth, $chkyear, $temp, $systole, $diastole, $symptoms, $ph_remarks, $chkpat,);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();
}
?>
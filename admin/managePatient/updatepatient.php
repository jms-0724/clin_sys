<?php
require("connection.php");
if(isset($_POST['pat_id'])){
	$pat_id=$_POST['pat_id'];
	$sql="SELECT * FROM tbl_patient WHERE pat_id = '$pat_id'";
	$result=$mysqli->query($sql);
	$response=array();
	foreach ($mysqli->query($sql) as $row) {
		$response=$row;
		// {
			// 	userid => $row['userid'],
			// 	username => $row['username'],
			// 	password => $row['password'],
			// 	name => $row['name'],
			// 	userlevel => $row['userlevel'],
		// }
	}
	echo json_encode($response);
}else{
	$response['status']=200; //200 means ok
	$response['message']="Invalid or data not found";
}

if(isset($_POST["patID"])){

	$patID = $_POST['patID'];
	$up_lname = $_POST['up_lname'];
	$up_fname = $_POST['up_fname'];
	$up_mname = $_POST['up_mname'];
	$up_gender = $_POST['up_gender'];
	$up_age = $_POST['up_age'];
	$up_town = $_POST['up_town'];
	$up_brgy = $_POST['up_brgy'];
	$up_cpnum = $_POST['up_cpnum'];


	$statement = $mysqli->prepare("UPDATE tbl_patient SET pat_lname = ?, pat_fname = ?, pat_mname = ?, pat_gender = ?, pat_age = ?, pat_mun = ?, pat_bar = ?, pat_cpnum = ?  WHERE pat_id = ?");

	if (!$statement) {
        echo "NO SQL Prepared";
    }
    $statement->bind_param("sssssssss", $up_lname, $up_fname, $up_mname, $up_gender, $up_age, $up_town, $up_brgy, $up_cpnum, $patID);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();

}
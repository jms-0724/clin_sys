<?php
require ("connection.php");

if(isset($_POST['m_id'])){
	$m_id=$_POST['m_id'];
	$sql="SELECT * FROM tbl_medicine WHERE m_id = '$m_id'";
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
?>
<?php
require("connection.php");
if(isset($_POST['m_id'])){
	$m_id=$_POST['m_id'];
	$sql="SELECT * FROM tbl_medicine WHERE m_id = '$m_id'";
	$result=$conn->query($sql);
	$response=array();
	foreach ($conn->query($sql) as $row) {
		$response=$row;
	}
	echo json_encode($response);
}else{
	$response['status']=200; //200 means ok
	$response['message']="Invalid or data not found";
}

if(isset($_POST["medID"])){

	$m_id = $_POST["medID"];
	$m_med = $_POST["m_med"];
	$m_class = $_POST["m_class"];
	$m_quantity = $_POST["m_quantity"];

	$statement = $mysqli->prepare("UPDATE tbl_medicine SET m_name = ?, m_class = ?, m_quantity = ? WHERE m_id = ?");

	if (!$statement) {
        echo "NO SQL Prepared";
    }
    $statement->bind_param("ssss", $m_med, $m_class, $m_quantity, $m_id);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement -> close();
    $mysqli -> close();

}
?>
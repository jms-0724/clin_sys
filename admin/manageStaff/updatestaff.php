<?php
require("connection.php");

if(isset($_POST['uid'])){
	$u_id=$_POST['uid'];
	$sql="SELECT * FROM tbl_user WHERE uid = '$u_id'";
	$result=$conn->query($sql);
	$response=array();
	foreach ($conn->query($sql) as $row) {
		$response=$row;
	}
	echo json_encode($response);
}
else
{
	$response['status']=200; //200 means ok
	$response['message']="Invalid or data not found";
}

if(isset($_POST['uID'])){

    $uid = $_POST['uID'];
    $u_uname = $_POST['u_uname'];
    $u_pword = $_POST['u_pword'];
    $u_ulevel = $_POST['u_ulevel'];
    $u_lname = $_POST['u_lname'];
    $u_fname = $_POST['u_fname'];
    $u_mname = $_POST['u_mname'];

    $statement = $mysqli->prepare("UPDATE tbl_user SET username = ?, password = ?, userlevel = ?, s_lname = ?, s_fname = ?, s_mname = ? WHERE uid = ?");
    $statement->bind_param("sssssss", $u_uname, $u_pword, $u_ulevel, $u_lname, $u_fname, $u_mname, $uid);

    if ($statement->execute()) {
        echo "success";
    } else {
        echo "failed";
    }

    $statement->close();
    $mysqli->close();
}
?>
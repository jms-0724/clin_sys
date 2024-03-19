<?php
    require("connection.php");
if(isset($_POST['c_id'])){
	$c_id=$_POST['c_id'];
	$sql="SELECT * FROM tbl_checkup WHERE c_id = '$c_id'";
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

if (isset($_POST['chk_id'])) {
    $c_id = $_POST['chk_id'];
    $prescmed = $_POST['pr_name'];
    $pquantity = $_POST['pr_quantity'];
    $dosage = $_POST['pr_dosage'];
    $medid = $_POST['medid'];

    // Use a prepared statement to avoid SQL injection
    $stmt = $mysqli->prepare("SELECT * FROM tbl_medicine WHERE m_id = ?");
    $stmt->bind_param("s", $medid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $oquantity = $row['m_quantity'];
// New Quantity = Old - Prescribed Quantity
        $nquantity = $oquantity - $pquantity; 

        if ($oquantity >= $pquantity) {
            // Use a prepared statement for INSERT to avoid SQL injection
            $statement = $mysqli->prepare("INSERT INTO tbl_prescription (presc_med, presc_quantity, presc_dosage, med_id, c_id) VALUES (?, ?, ?, ?, ?)");
            $statement->bind_param("sssss", $prescmed, $pquantity, $dosage, $medid, $c_id);

            // Use a prepared statement for UPDATE to avoid SQL injection
            $update = $mysqli->prepare("UPDATE tbl_medicine SET m_quantity = ? WHERE m_id = ?");
            $update->bind_param("ss", $nquantity, $medid);

            // Check if both prepared statements execute successfully
            if ($statement->execute() && $update->execute()) {
                echo "success";
            } else {
                echo "error";
            }

            $statement->close();
            $update->close();
        } else {
            echo "error"; // Quantity not enough
        }
    } else {
        echo "error"; // Medicine not found
    }

    $stmt->close();
    $mysqli->close();
}
?>
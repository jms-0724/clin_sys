<?php
require_once("connection.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $stmt = $mysqli->prepare("SELECT * FROM tbl_checkup INNER JOIN tbl_prescription ON tbl_prescription.c_id = tbl_checkup.c_id WHERE tbl_prescription.c_id LIKE '%$search%'"); 
} else {
    $stmt = $mysqli->prepare("SELECT * FROM tbl_checkup INNER JOIN tbl_prescription ON tbl_prescription.c_id = tbl_checkup.c_id"); 
} 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['presc_id']?></td>
            <td><?= $row['presc_med']?></td>
            <td><?= $row['presc_quantity']?></td>
            <td><?= $row['presc_dosage']?></td>
            <td><?= $row['c_id']?></td>
            <td><?= $row['c_day']?>, <?= $row['c_month']?>, <?= $row['c_year']?></td>

        </tr>
        <?php
    }
        
} else {
   ?>
        <td colspan="5"><center>No Records Found</center></td>
   <?php
}
?>
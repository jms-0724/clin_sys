<?php
require_once("connection.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $stmt = $mysqli->prepare("SELECT * FROM tbl_patient INNER JOIN tbl_checkup ON tbl_patient.pat_id = tbl_checkup.pat_id WHERE c_id LIKE '%$search%' OR pat_lname LIKE '%$search%'"); 
} else {
    $stmt = $mysqli->prepare("SELECT * FROM tbl_patient INNER JOIN tbl_checkup ON tbl_patient.pat_id = tbl_checkup.pat_id"); 
} 
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['c_id']?></td>
            <td><?= $row['c_number']?></td>
            <td><?= $row['c_month']?>, <?= $row['c_day']?> <?= $row['c_year']?></td>
            <td><?= $row['temperature']?></td>
            <td><?= $row['bp_sys']?> / <?= $row['bp_dia']?></td>
            <td><?= $row['symptom']?></td>
            <td><?= $row['physical_remarks']?></td>
            <td><?= $row['pat_id']?></td>
            <td><?= $row['pat_lname']?>, <?= $row['pat_fname']?> <?= $row['pat_mname']?></td>

        </tr>
        <?php
    }
        
} else {
   ?>
        <td colspan="9"><center>No Records Found</center></td>
   <?php
}
?>
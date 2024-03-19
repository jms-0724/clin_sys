<?php
require_once("connection.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $stmt = $mysqli->prepare("SELECT * FROM tbl_patient WHERE pat_lname LIKE '%$search%' OR pat_fname LIKE '%$search%' OR pat_mun LIKE '%$search%' "); 
} else {
    $stmt = $mysqli->prepare("SELECT * FROM tbl_patient"); 
} 

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
        <tr>
                <td><?= $row['pat_lname']?></td>
                <td><?= $row['pat_mname']?></td>
                <td><?= $row['pat_fname']?></td>
                <td><?= $row['pat_gender']?></td>
                <td><?= $row['pat_age']?></td>
                <td><?= $row['pat_mun']?></td>
                <td><?= $row['pat_bar']?></td>
                <td><?= $row['pat_cpnum']?></td>
                <td><button onclick="editPat(<?=$row['pat_id'] ?>)" class="btn btn-sm btn-outline-secondary">Edit</button></td>

            </tr>
                
        </tr>
        <?php
    }
} else {
    ?>
        <td colspan="10">No Records Found</td>
    <?php
}
?>
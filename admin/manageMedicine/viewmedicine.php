<?php
require_once("connection.php");

$stmt = $mysqli->prepare("SELECT * FROM tbl_medicine");

if (!$stmt) {
    echo "NO Statement Prepared";
}
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?= $row['m_name']?></td>
            <td><?= $row['m_class']?></td>
            <td><?= $row['m_quantity']?></td>
            <td><button class="btn btn-sm btn-outline-warning" onclick="editMeds(<?=$row['m_id'];?>)">Edit</button></td>
        </tr>
        <?php
    }
        
} else {
    ?>
         <td colspan="5"><center>No Records Found</center></td>
    <?php
}
?>
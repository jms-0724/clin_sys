<?php
require_once("connection.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $stmt = $mysqli->prepare("SELECT * FROM tbl_medicine WHERE m_name LIKE '%$search%'"); 
} else {
    $stmt = $mysqli->prepare("SELECT * FROM tbl_medicine"); 
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
        <td colspan="9"><center>No Records Found</center></td>
   <?php
}
?>
<?php
require_once("connection.php");

if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $stmt = $mysqli->prepare("SELECT * FROM tbl_user WHERE username LIKE '%$search%'"); 
} else {
    $stmt = $mysqli->prepare("SELECT * FROM tbl_user"); 
} 

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr id="<?= $row['username'] ?>">
                <td><?= $row['username']?></td>
                <td><?= $row['userlevel']?></td>
                <td><?= $row['s_lname']?>, <?= $row['s_fname']?>, <?= $row['s_mname']?></td>
                <td>  <button type ="button" class="btn btn-sm btn-outline-secondary" data-role="" id="btn-editStaff" data-id="<?= $row['uid'] ?>" onclick="editStaff(<?= $row['uid']?>)">
                    Edit
                </button></td>
                
        </tr>
        <?php
    }
} else {
    ?>
        <td colspan="6">No Records Found</td>
    <?php
}
?>
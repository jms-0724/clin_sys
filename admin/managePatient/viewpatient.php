<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT * FROM tbl_patient");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?= $row['pat_id']?></td>
                <td><?= $row['pat_lname']?></td>
                <td><?= $row['pat_mname']?></td>
                <td><?= $row['pat_fname']?></td>
                <td><?= $row['pat_gender']?></td>
                <td><?= $row['pat_age']?></td>
                <td><?= $row['pat_mun']?></td>
                <td><?= $row['pat_bar']?></td>
                <td><?= $row['pat_cpnum']?></td>
                <td><button onclick="editPat(<?=$row['pat_id'];?>)" class="btn btn-sm btn-outline-secondary">Edit</button></td>

            </tr>
            <?php
        }
            
    } else {
        ?>
        <td colspan="10">No Records Found</td>
        <?php
    }
?>
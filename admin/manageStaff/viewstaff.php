<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT * FROM tbl_user");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?= $row['username']?></td>
                <td><?= $row['userlevel']?></td>
                <td><?= $row['s_lname']?></td>
                <td><?= $row['s_fname']?></td>
                <td><?= $row['s_mname']?></td>
                <td><button>Edit</button></td>

            </tr>
            <?php
        }
            
    } else {
       ?>
            <td colspan="6">No Records Founds</td>
       <?php
    }
?>
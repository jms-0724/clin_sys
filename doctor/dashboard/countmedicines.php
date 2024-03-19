<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM tbl_medicine");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
                <p>Number of Patients: <span><?= $row['COUNT(*)']?> Medicines</span></p>
            <?php
        }
            
    } else {
       ?>
            <td colspan="6">No Records Founds</td>
       <?php
    }
?>
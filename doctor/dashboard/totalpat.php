<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT COUNT(*) FROM tbl_patient");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
            <div>
                <p>Number of Patients: <span><?= $row['COUNT(*)']?> Patients</span></p>
            </div>
            <?php
        }
            
    } else {
       ?>
            <td colspan="6">No Records Founds</td>
       <?php
    }
?>
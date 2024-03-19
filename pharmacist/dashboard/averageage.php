<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT ROUND(AVG(pat_age), 2) AS avg_pat_age FROM tbl_patient");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
                <p>Average Age of Patients: <span><?= $row['avg_pat_age']?> Years Old</span></p>
            <?php
        }
            
    } else {
       ?>
            <td colspan="6">No Records Founds</td>
       <?php
    }
?>
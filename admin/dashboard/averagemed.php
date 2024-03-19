<?php

require_once("connection.php");

    $stmt = $mysqli->prepare("SELECT ROUND(AVG(presc_quantity), 2) AS avg_presc_quantity FROM tbl_prescription");
    
    if (!$stmt) {
        echo "NO Statement Prepared";
    }
    $stmt->execute();
    $result = $stmt->get_result();

     if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            ?>
                <p>Average Prescribed Medicines: <span><?= $row['avg_presc_quantity']?> Medicines</span></p>
            <?php
        }
            
    } else {
       ?>
            <td colspan="6">No Records Founds</td>
       <?php
    }
?>
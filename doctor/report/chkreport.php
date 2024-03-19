<?php
require("../fpdf185/fpdf.php");
class PDF extends FPDF {
    function Header(){
    // Select Arial bold 15
    $this->SetFont('Arial', 'B', 15);
                // Move to the right
    $this->Cell(70);
                // Framed title
    $this->Cell(50, 10, 'Vital Care Checkup Form', 0, 0, 'C');  // Increase the width to 30
                // Line break
    $this->Ln(20);

    $this->SetFont('Arial','B','14');
    $this->SetFillColor(180, 180, 255);
    $this->SetDrawColor(50, 50, 100);
    }
function Footer(){
    $this->SetY(-15);
    $this->SetFont('Arial','','9');
    $this->Cell(0,10,'Page' .$this->PageNo(),0,1,'C');

}
   
}
    require("connection.php");
    $pdf = new PDF('P','mm','A4');

        $search = $_POST['chkjoin'];
        $pdf->SetFont('Arial','B','12');
        $pdf->addPage();
        $sql = "SELECT * FROM tbl_patient INNER JOIN tbl_checkup ON tbl_patient.pat_id = tbl_checkup.pat_id WHERE c_id = '$search'";
        $data = $mysqli->query($sql);

        if($row = $data->fetch_assoc()) {
            $pdf->SetFont('Arial','B','14');
        $pdf->Cell('20','10','Patient Information:',0,0,'',false);
        $pdf->Ln(); // Move to the next line
        $pdf->SetFont('Arial','','12');

        $pdf->Cell('15','10','Patient ID:',0,0,'',false);
        $pdf->Cell('5','10','',0,0,'',false);
        $pdf->Cell(20, 10, $row['pat_id'], 0); // Add more cells for other data
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('38','10','Patient Lastname:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_lname'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('38','10','Patient Firstname:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_fname'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('41','10','Patient Middlename:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_mname'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('25','10','Gender:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_gender'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('25','10','Municipality:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_mun'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('25','10','Barangay:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_bar'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('41','10','Cellphone Number:',0,0,'',false);
        $pdf->Cell(50, 10, $row['pat_cpnum'], 0);
        $pdf->Ln(); // Move to the next line

        $pdf->SetFont('Arial','B','14');
        $pdf->Cell(50, 20,'Checkup Information', 0);
        $pdf->Ln(); // Move to the next line
        $pdf->SetFont('Arial','','12');
            

        $pdf->Cell('20','10','Checkup ID:',0,0,'',false);
        $pdf->Cell('5','10','',0,0,'',false);
        $pdf->Cell(20, 10, $row['c_id'], 0); // Add more cells for other data
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('38','10','Checkup Number:',0,0,'',false);
        $pdf->Cell(50, 10, $row['c_number'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('15','10','Date:',0,0,'',false);
        $pdf->Cell(50, 10, $row['c_month']. ", ".$row['c_day']. ", ".$row['c_year'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('28','10','Temperature:',0,0,'',false);
        $pdf->Cell(50, 10, $row['temperature']. "degrees Celsius", 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('30','10','Blood Pressure:',0,0,'',false);
        $pdf->Cell(50, 10, $row['bp_sys']."mmHg/". $row['bp_dia']."mmHg", 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('38','10','Physical Remarks',0,0,'',false);
        $pdf->Cell(90, 10, $row['physical_remarks'], 0);
        $pdf->Ln(); // Move to the next line
        $pdf->Cell('20','10','Symptom:',0,0,'',false);
        $pdf->Cell(90, 10, $row['symptom'], 0);
        $pdf->Ln(); // Move to the next line
        } else {
            $pdf->Cell('20','10','Patient ID:',0,0,'',false);
            $pdf->Cell('5','10','',0,0,'',false);
            $pdf->Cell(20, 10,'No Records Found', 0); // Add more cells for other data
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('38','10','Patient Lastname:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('38','10','Patient Firstname:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('41','10','Patient Middlename:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('30','10','Gender:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('30','10','Municipality:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('30','10','Barangay:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
            $pdf->Cell('41','10','Cellphone Number:',0,0,'',false);
            $pdf->Cell(50, 10,'No Records Found', 0);
            $pdf->Ln(); // Move to the next line
        }

    


    $pdf->Output();
?>
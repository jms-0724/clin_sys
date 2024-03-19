<?php
require("../fpdf185/fpdf.php");
class PDF extends FPDF {
    function Header(){
    // Select Arial bold 15
    $this->SetFont('Arial', 'B', 15);
                // Move to the right
    $this->Cell(70);
                // Framed title
    $this->Cell(50, 10, 'Vital Care Prescription Form', 0, 0, 'C');  // Increase the width to 30
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
function FancyTable($header, $data2)
{
    
    // Colors, line width and bold font
    $this->SetFillColor(51,51,255);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(25, 60, 50, 50);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data2 as $row2)
    {
        $this->Cell($w[0],6,$row2['presc_id'],'LR',0,'C',$fill);
        $this->Cell($w[1],6,$row2['presc_med'],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$row2['presc_quantity'],'LR',0,'C',$fill);
        $this->Cell($w[3],6,$row2['presc_dosage'],'LR',0,'C',$fill);

        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
   
}
    require("connection.php");
    $pdf = new PDF('P','mm','A4');

        $search = $_POST['prescJoin'];
        $pdf->SetFont('Arial','B','12');
        $header = array('Presc#','Medicine Name', 'Medicine Type', 'Dosage');
        $pdf->addPage();
        $sql = "SELECT * FROM tbl_checkup INNER JOIN tbl_prescription ON tbl_prescription.c_id = tbl_checkup.c_id WHERE tbl_prescription.c_id LIKE '%$search%'";
        $data = $mysqli->query($sql);

        $sql2 = "SELECT * FROM tbl_checkup INNER JOIN tbl_prescription ON tbl_prescription.c_id = tbl_checkup.c_id WHERE tbl_checkup.c_id = '$search'";
        $data2 = $mysqli->query($sql2);

        if($row = $data->fetch_assoc()) {
            $pdf->SetFont('Arial','B','14');
        $pdf->Cell('20','10','Prescriptions',0,0,'',false);
        $pdf->Ln(); // Move to the next line
        $pdf->SetFont('Arial','','12');
            
        $pdf->Cell('20','10','Checkup ID:',0,0,'',false);
        $pdf->Cell('5','10','',0,0,'',false);
        $pdf->Cell(20, 10, $row['c_id'], 0); // Add more cells for other data
        $pdf->Ln(); // Move to the next line

        } else {
            $pdf->Cell('20','10','Checkup ID',0,0,'',false);
            $pdf->Cell('5','10','',0,0,'',false);
            $pdf->Cell(20, 10,'No Records Found', 0); // Add more cells for other data
        }


    $pdf->FancyTable($header, $data2);




    $pdf->Output();
?>
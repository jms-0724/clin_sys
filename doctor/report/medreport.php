<?php
require("../fpdf185/fpdf.php");
class PDF extends FPDF {
    function Header(){
    // Select Arial bold 15
    $this->SetFont('Arial', 'B', 15);
                // Move to the right
    $this->Cell(70);
                // Framed title
    $this->Cell(50, 10, 'Vital Care Pharmacy Medicines', 0, 0, 'C');  // Increase the width to 30
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
    function FancyTable($header, $data)
{
    
    // Colors, line width and bold font
    $this->SetFillColor(51,51,255);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(25, 60, 50, 35);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row['m_id'],'LR',0,'C',$fill);
        $this->Cell($w[1],6,$row['m_name'],'LR',0,'C',$fill);
        $this->Cell($w[2],6,$row['m_class'],'LR',0,'C',$fill);
        $this->Cell($w[3],6,$row['m_quantity'],'LR',0,'C',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}
    require("connection.php");
    $pdf = new PDF('P','mm','A4');
    $header = array('Med#','Medicine Name', 'Medicine Type', 'Quantity');
    $sql = "SELECT * FROM tbl_medicine";
    $data = $mysqli->query($sql);

    $pdf->SetFont('Arial','B','12');
    $pdf->addPage();
    $pdf->FancyTable($header, $data);

    $pdf->Output();
?>
<?php
require("../fpdf185/fpdf.php");
class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(80);
        $this->Cell(100, 10, 'VitalCare Clinic', 0, 1);
        $this->Cell(100, 10, 'List of Patients', 0, 1);
    }

    // Colored table
    function FancyTable($header, $data)
    {
        // Colors, line width and bold font
        $this->SetFillColor(51, 51, 255);
        $this->SetTextColor(255);
        $this->SetDrawColor(128, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B', 11);

        // Header
        $w = array(15, 35, 45, 35, 15, 20, 40, 35, 45);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $this->Ln();

        // Color and font restoration
        $this->SetFillColor(224, 235, 255);
        $this->SetTextColor(0);
        $this->SetFont('');

        // Data
        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 6, $row['pat_id'], 'LR', 0, 'C', $fill);
            $this->Cell($w[1], 6, $row['pat_lname'], 'LR', 0, 'C', $fill);
            $this->Cell($w[2], 6, $row['pat_fname'], 'LR', 0, 'C', $fill);
            $this->Cell($w[3], 6, $row['pat_mname'], 'LR', 0, 'C', $fill);
            $this->Cell($w[4], 6, $row['pat_age'], 'LR', 0, 'C', $fill);
            $this->Cell($w[5], 6, $row['pat_gender'], 'LR', 0, 'C', $fill);
            $this->Cell($w[6], 6, $row['pat_mun'], 'LR', 0, 'C', $fill);
            $this->Cell($w[7], 6, $row['pat_bar'], 'LR', 0, 'C', $fill);
            $this->Cell($w[8], 6, $row['pat_cpnum'], 'LR', 0, 'C', $fill);
            $this->Ln();
            $fill = !$fill;
        }

        // Closing line
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$pdf = new PDF('L', 'mm', 'A4');

// Column headings
$header = array('#', 'Lastname', 'Firstname', 'Middlename', 'Age', 'Gender', 'Municipality','Barangay','Cellphone Number');

require("connection.php");

if (isset($_POST['searchPatients'])) {
    $search = $_POST['searchPatients'];
    $stmt = $conn->prepare("SELECT * FROM tbl_patient WHERE pat_lname LIKE '%$search%' OR pat_fname LIKE '%$search%' OR pat_mun LIKE '%$search%' ");
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
} else {
    $result = $conn->query("SELECT * FROM tbl_patient");
    
}

// Data loading
$pdf->SetFont('Arial', '', 14);
$pdf->AddPage();

// Check if there are records
if ($result->num_rows > 0) {
    $data = $result->fetch_all(MYSQLI_ASSOC);
    $pdf->FancyTable($header, $data);
} else {
    $pdf->Cell(0, 10, 'No records found', 0, 1, 'C');
}

$pdf->Output();
?>

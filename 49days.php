<?php

#if(isset($_POST['submit'])) 
{
	$habitname = $_POST['habitname'];
	$reason1 = $_POST['reason1'];
	$reason2 = $_POST['reason2'];
	$reason3 = $_POST['reason3'];
	$reward = $_POST['reward'];
}
require('fpdf.php');

//A4 width : 219mm
//default margin : 10mm
//writable horizontal : 219 - (10*2) = 189mm
$pdf = new FPDF('p','mm','A4');
  
$pdf->AddPage();

$pdf->Image('logo2.png',10,10);
 //set font to arial bold 35pt
$pdf->SetFont('Arial','B',35);
$pdf->Cell(40   ,22,'',0,0);
$pdf->Cell(90   ,15,$habitname,0,1);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(40   ,0,'',0,0);
$pdf->Cell(35   ,8,'Reason 1:',0,0);
$pdf->Cell(0   ,8,$reason1,0,1);
$pdf->Cell(40   ,0,'',0,0);
$pdf->Cell(35   ,8,'Reason 2:',0,0);
$pdf->Cell(0   ,8,$reason2,0,1);
$pdf->Cell(40   ,0,'',0,0);
$pdf->Cell(35   ,8,'Reason 3:',0,0);
$pdf->Cell(0   ,8,$reason3,0,1);
$pdf->Cell(40   ,10,'',0,1);

 //cell (width, height, text, border 0/1, end line 0/1, [align l/c/r] )
$pdf->SetFont('Arial','',12);
$pdf->Cell(23   ,22,'Day 1',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 2',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 3',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 4',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 5',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 6',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 7',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 8',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 9',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 10',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 11',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 12',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 13',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 14',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 15',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 16',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 17',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 18',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 19',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 20',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 21',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 22',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 23',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 24',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 25',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 22',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 27',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 28',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 29',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 30',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 31',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 32',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 33',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 34',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 35',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 36',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 37',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 38',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 39',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 40',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 41',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 42',1,1,'C');
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(23   ,22,'Day 43',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 44',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 45',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 46',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 47',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 48',1,0,'C');
$pdf->Cell(4   ,22,'',0,0);
$pdf->Cell(23   ,22,'Day 49',1,1,'C');
$pdf->SetFont('Arial','B',20);
$pdf->Cell(500   ,4,'',0,1);
$pdf->Cell(30   ,8,'Reward:',0,0);
$pdf->Cell(0   ,8,$reward,0,1);

$pdf->Output();
?>
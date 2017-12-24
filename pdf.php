
<?php
require('../fpdf.php');
include ("data.php");

$pdf = new FPDF();
$pdf->AddPage('L');
// L = Landscape  P = Portrait

//fontstyle.Bold (B I U ) size
$pdf->Image('companyorientation1.jpg',1,6,280);
//displaying name on pdf



$pdf->SetFont('Courier','B',30);
$pdf->SetXY(30,93);
$pdf->Cell(0,0,$try1,0,0,'C');

$pdf->SetFont('Times','I',18);
$pdf->SetXY(0,130);
$pdf->Cell(0,0,$try2,0,0,'C');

// cell position - width height and display 
//$pdf->$try;
$pdf->Output();

?>

<script type="text/javascript">
	
  $(document).ready(function() {
      
       

        $('.print default').on( 'click', function () {   
           


destination="phpken.php";
var xhr=new XMLHttpRequest();
xhr.open("GET",destination,true);
xhr.send();
xhr.onreadystatechange=function() {
      if(xhr.readyState==4 && xhr.status==200) {
    
      }
     }




        } );




        
      } );




</script>

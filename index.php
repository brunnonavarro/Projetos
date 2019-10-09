<?php

require_once("RotateText/RPDF.php");



$caminhoArquivo = 'C:\Users\Piolho\Desktop\LivrosBC\testeconvertido.pdf';
$cpf = "000.000.000-00";


// initiate FPDI
$pdf = new RPDF();
// add a page
$pdf->AddPage('P','A4','');
// set the source file
$pdf->setSourceFile($caminhoArquivo);


$pageCount = $pdf-> setSourceFile($caminhoArquivo);

for ($numeroPagina = 1; $numeroPagina < $pageCount; $numeroPagina++)
{   
    // import page 1
    $tplIdx = $pdf->importPage($numeroPagina);
    $pdf->useTemplate($tplIdx,0,0,190,280,true);
    $pdf->SetTextColor(255, 0, 0);
    //$pdf->SetAlpha(0.3);

    $pdf->setFont('Arial','B',48);
    //$pdf->RotatedText(70,210,'LICENCIADO PARA:',60);
  //  $pdf->RotatedText(100,195,$cpf,60);



    $pdf-> AddPage();

}
    


// now write some text above the imported page


$pdf->Output();

?>
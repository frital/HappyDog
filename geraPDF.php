<?php

require_once './MPDF57/mpdf.php';
$mpdf = new mPDF('', 'A4');
$mpdf->SetAuthor('Happy-Dog');
ob_start();
include './listarAnimais.php';
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>

<?php

    // reference the Dompdf namespace
    use  Dompdf\Dompdf;
    include_once "dompdf/autoload.inc.php";
    $pdf  = new Dompdf();
    $html = file_get_contents("http://localhost:8080/CoDES/imprimeProyecto.php?id=" . $_GET['id']);
    $pdf->loadHtml($html);
    $pdf->setPaper("Letter","portrait");
    $pdf->render();
    $pdf->stream("ReporteSalida", array('Attachment' => 0));
?>

<?php
    require_once './dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $options = $dompdf->getOptions();
    $options->setDefaultFont('Courier');
    $dompdf->setOptions($options);


    $dompdf->loadHtml('Gerencia de Tecnologias | Coordinación de Desarrollo');

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('Letter', 'portrait'); //'A4/Letter'  o 'landscape/portrait'

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
?>

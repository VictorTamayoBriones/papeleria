<?php
    require "../vendor/autoload.php";

    use Spipu\Html2Pdf\Html2Pdf;

    //recoger los datos html para imprimirlos en el pdf
    
    ob_start();
    require_once "viewPdf.php";
    $html = ob_get_clean();
    $html2pdf = new Html2Pdf('p', 'A4', 'es', 'true', 'UTF-8');
    $html2pdf -> writeHTML($html);
    $html2pdf -> output('reporte.pdf');
    
?>

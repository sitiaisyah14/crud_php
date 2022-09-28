<?php
require('../vendor/autoload.php');
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$kodeHtml = "Hai";
$dompdf->loadHtml($kodeHtml);
$dompdf->setPaper('A4','Landscape');
$dompdf->render();
$dompdf->stream('Coba lg.pdf');
?>
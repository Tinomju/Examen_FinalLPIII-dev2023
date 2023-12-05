<?php
/**
 * Html2Pdf Library - Formulario
 * HTML => PDF converter
 **/
include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
require_once(ROOT_PATH.'vendor/autoload.php');

require_once(CONTROLLER_PATH.'respuestaController.php');
$object = new respuestaController();
$rows = $object->select_resp();


use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;

try {
    ob_start();
    include dirname(__FILE__).'/doc/formulario_html2.php';
    $content = ob_get_clean();

    $html2pdf = new Html2Pdf('P', 'A4', 'es', true, 'UTF-8', 3);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->output('formulario.pdf');
} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
    require_once(CONTROLLER_PATH.'respuestaController.php');
    $object = new respuestaController();

    $descripcion = $_REQUEST['descripcion'];
    $iditem = $_REQUEST['id'];

    $registro = $object->insertarRespuesta($descripcion)
    
?>


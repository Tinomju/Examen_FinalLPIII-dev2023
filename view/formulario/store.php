<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
    require_once(CONTROLLER_PATH.'formularioController.php');
    $object = new formularioController();

    $otros_datos = $_REQUEST['otros_datos'];
    $mensaje = $_REQUEST['mensaje'];
    $fecha = $_REQUEST['fecha'];
    $idcarreras = $_REQUEST['idcarreras'];
    $id_secciones = $_REQUEST['id_secciones'];
    $id_tipo = $_REQUEST['id_tipo'];
    $id_user = $_REQUEST['id_user'];

    $registro = $object->insert($otros_datos,$mensaje,$fecha,$idcarreras,$id_secciones,$id_tipo,$id_user);
    
?>
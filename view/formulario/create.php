<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
   
    require_once(CONTROLLER_PATH.'formularioController.php');
    $object = new formularioController();
    $idCarreras = $object->combolist();
    $idSecciones = $object->combolistS();
    $idTipo = $object->combolistT();
    $idUser = $object->combolistU();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Formulario a enviar</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>

        <form id="formItem" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="row mb-3">
                <label for="otros_datos" class="col-sm-5 col-form-label"></label>
                <div class="col-sm-8">
                <h5>
                Otros datos
                </h5>
                    <input type="text" class="form-control" id="otros_datos" name="otros_datos" placeholder="Datos del involucrado. Ejemplo: Nombre, apellido, etc." >
                </div>
            </div>
            <h5>
                Redactar
            </h5>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese aquí su mensaje" >
            </div>
        <div class="mb-3">
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
                 <div class="invalid-feedback">¡Ingrese o seleccione una fecha válida!</div>
            </div>
            <div class="mb-3">
                <label for="idcarreras" class="form-label">Carreras</label>
                <select class="form-control" name="idcarreras" id="idcarreras" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($idCarreras as $idcarreras) { ?>
                       <option value="<?=$idcarreras['idcarreras']?>"><?=$idcarreras['descripcioncar']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="id_secciones" class="form-label">Secciones</label>
                <select class="form-control" name="id_secciones" id="id_secciones" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($idSecciones as $id_secciones) { ?>
                       <option value="<?=$id_secciones['id_secciones']?>"><?=$id_secciones['descripcionsec']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="id_tipo" class="form-label">Tipo</label>
                <select class="form-control" name="id_tipo" id="id_tipo" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($idTipo as $id_tipo) { ?>
                       <option value="<?=$id_tipo['id_tipo']?>"><?=$id_tipo['descripciontip']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="id_user" class="form-label">Usuario</label>
                <select class="form-control" name="id_user" id="id_user" required>
                    <option selected disabled value="">No Especificado</option>
                    <?php foreach ($idUser as $usuario) { ?>
                       <option value="<?=$usuario['id_user']?>"><?=$usuario['username']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">¡Seleccione un elemento válido!</div>
            </div>                        
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>
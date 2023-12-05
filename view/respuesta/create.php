<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');

require_once(CONTROLLER_PATH.'respuestaController.php');
$controlador = new respuestaController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica si se ha enviado un formulario
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';

    // Llama al método insertarRespuesta del controlador
    $controlador->insertarRespuesta($descripcion);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Respuesta a enviar</title>
</head>
<body>
    <?php require_once(VIEW_PATH.'navbar/navbarA.php'); ?>
    
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>
        
        <form id="formrespuesta" action="" method="post" class="g-3 needs-validation" novalidate>
            <div class="row mb-3">
                <label for="descripcion" class="col-sm-5 col-form-label">Formule su respuesta</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>
            </div>                
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
        </form>
    </div>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
    <!-- No es necesario incluir validate.js aquí si se está manejando la validación en el controlador -->
</body>
</html>

<?php
     include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
     require_once(CONTROLLER_PATH.'respuestaController.php');
     $object = new respuestaController();
     $rows = $object->select_resp();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <title>Respondiendo</title>
</head>
<body>
<?php
        require_once(VIEW_PATH.'navbar/navbarA.php');
?>
<section class="intro">
    <div class="container">
        <div class="mb-3"></div>
        <div class="mb-3">
            <!-- <a href="javascript:imprimirWindow('ventana')" class="btn btn-info">Imprimir</a> -->
            <a href="pdf/respuesta2.php" target="_blank" class="btn btn-info">Exportar</a>
        </div>
        <div class="table-responsive table-scroll" 
        data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
        <table id="myTabla" class="table table-striped mb-0">
            <thead style="background-color: #002d72;">
                <tr>
                    <th scope="col">Nro.</th>
                    <th scope="col">Respuesta</th>
                    <th scope="col">Nro. formulario</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ((array) $rows as $row) { ?>
                <tr>
                    <td><?=$row['idrespuesta']?></td>
                    <td><?=$row['descripcion']?></td>
                    <td><?=$row['id']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>  
    </div>  
</section>
        <!-- div area de impresion -->
            <div class="container" id="ventana" style="display:none;">
                <div class="mb-3">
                    <h2 style="font-size: 3.00rem;">Listado de matriculas</h2>
                </div>
                <div class="table-responsive table-scroll" 
                data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
                <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                    <thead>
                        <tr>
                            <th colspan="1" scope="col">MATRICULA</th>
                            <th colspan="1" scope="col">FECHA</th>                            
                            <th colspan="3" scope="col">NOMBRE</th>
                            <th colspan="3" scope="col">APELLIDO</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td colspan="1"><?=$row['idMatricula']?></td>
                            <td colspan="1"><?=$row['fecha']?></td>                                 
                            <td colspan="4"><?=$row['nombre']?></td>
                            <td colspan="4"><?=$row['apellido']?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>  
        </div>   
        <!-- fin area de impresion -->
</body>
<?php include_once (ROOT_PATH . 'footer.php')  ?>
<script>
    $(document).ready( function () {
        //$('#myTabla').DataTable();
        var table = new DataTable('#myTabla', {
            language: {
                url: '../../assets/js/es-ES.json',
            },
            'paging': true,
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 'Todos']
            ] 
        });
    } );    
</script>
</html>
<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/ProyectoQS-main-V3/routes.php');
?>
<nav class="navbar" style="background-color: #caffff;">
  <form class="container-fluid justify-content-start">
    <ul>
      <a class="navbar-brand" href="#">OpinaAcá</a>
    </ul>
    <ul>
      <a class="nav-link active" aria-current="page" href="<?=PROJECT_PATH?>">Inicio</a>
    </ul>
    <ul>
      <a class="btn btn-primary" href="<?=PROJECT_PATH?>view/formulario/create.php" role="button" style="background-color: #aeffae;">Redactar</a>
      <a class="btn btn-primary" href="<?=PROJECT_PATH?>view/formulario/indext.php" role="button" style="background-color: #ffff91;">Registros</a>
      <a class="btn btn-primary" href="<?=PROJECT_PATH?>view/formulario/" role="button" style="background-color: #53a9ff;">Respuestas</a>
    </ul>

    <ul>
      <a href="#" class="btn btn-warning btn-sm"  style="background-color: #ffdbb7">Cerrar sesión</a>
    </ul>
  </form>
</nav>
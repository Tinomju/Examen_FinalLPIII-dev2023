<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form method="post">
        <h2>
            Registrarse
        </h2>
        <p>Iniciando</p>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Alias">
            <img class="input-icon" src="assets/images/name.svg" alt="imagen_alias">
        </div>
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class="input-icon" src="assets/images/name.svg" alt="imagen_nombre">
        </div>

        <div class="input-wrapper">
            <input type="text" name="apellido" placeholder="Apellido">
            <img class="input-icon" src="assets/images/name.svg" alt="imagen_apellido">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo">
            <img class="input-icon" src="assets/images/email.svg" alt="imagen_correo">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class="input-icon" src="assets/images/password.svg" alt="imagen_contraseña">
        </div>

        <input class="btn" type="submit" name="register" value="Enviar">
    </form>
    
</body>
</html>
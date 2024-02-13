<?php

session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Acceso a Sistema</title>
</head>
<body>
  <center>
    <form action="validarform.php" method="post">
    <h2>Iniciar sesión</h2>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <center><div>
        <button type="submit">Iniciar sesión</button> 
          <a href="registro.php">Crear Cuenta</a>
        </div>
        </center>
    </form>
  </center>
</body>
</html>

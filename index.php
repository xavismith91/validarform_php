



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Validación con Formulario en PHP</title>
</head>
<body>
<h2>Registro</h2>
<div>
<form action="insertarusuario.php" method="post">
  <!-- Campo Nombre -->
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" required>
   <br> 
  <!-- Campo Apellidos -->
  <label for="apellidos">Apellidos:</label>
  <input type="text" id="apellidos" name="apellidos" required>
  <br>
  <!-- Campo Correo -->
  <label for="correo">Correo:</label>
  <input type="email" id="correo" name="correo" required>
  <br>
  <!-- Campo Usuario -->
  <label for="usuario">Usuario:</label>
  <input type="text" id="usuario" name="usuario" required>
  <br>
  <!-- Campo Contraseña -->
  <label for="contrasena">Contraseña:</label>
  <input type="password" id="contrasena" name="contrasena" required>
  <br>
  <!-- Campo Teléfono -->
  <label for="telefono">Teléfono:</label>
  <input type="tel" id="telefono" name="telefono" required>
  <br>
  <!-- Botón de Registro -->
  <center><input type="submit" name="submit" value="Iniciar Sesión" class="btn btn-primary required parrafo"></center>
  </div>

</form>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1> Bienvenido al sistema  </h1>
    <p>User: <?php  echo $_SESSION['usuario']?> </p>
    <a href="cerrar_session.php">Cerrar Sesion</a>

</body>
</html>
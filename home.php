<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1> Bienvenido al Sistema  </h1>
    <p>User:  </p>
    <a href="cerrar_session.php">Cerrar Sesion</a>

</body>



<?php

session_destroy();

?>
</html>
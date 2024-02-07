<?php
session_start();



    $varsesion = $_SESSION['usuario'];
    if ($varsesion == null || $varsesion = '') {
        echo'No tienes acceso a esta sección';   
        die();
    }

if ($_SERVER["REQUEST_METHODd"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar el usuario y contraseña
    $sql = "SELECT * FROM users WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

 
       if($result->num_rows > 0) {
        // Usuario y contraseña son correctos
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contrasena'] = $contrasena;
        header("Location: home.php"); // Redirigir a la página de bienvenida
    } else {
        // Usuario y/o contraseña incorrectos
        echo "Usuario y/o contraseña incorrectos. Intenta de nuevo.";
    }
}

$conn->close();
?>

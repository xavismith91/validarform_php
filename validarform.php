<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar el usuario y contraseña
    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario y contraseña son correctos
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenido.php"); // Redirigir a la página de bienvenida
    } else {
        // Usuario y/o contraseña incorrectos
        echo "Usuario y/o contraseña incorrectos. Intenta de nuevo.";
    }
}

$conn->close();
?>

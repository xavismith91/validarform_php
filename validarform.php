<?php

include('db.php');
error_reporting(0);

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['contrasena'];


$consulta = "SELECT * FROM users WHERE usuario = '$USUARIO' and contrasena = '$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);


if($filas) {
    header("location:home.php");
}else{
    include("index.php");
    ?>

    echo '<script>Swal.fire("SweetAlert2 is working!");</script>'
    <!-- echo '<script language="javascript">alert("Verifica tu Información");</script>'; -->
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


// session_start();
//     $varsesion = $_SESSION['usuario'];
//     if ($varsesion == null || $varsesion = '') {
//         echo'No tienes acceso a esta sección';   
//         die();
//     }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $usuario = $_POST['usuario'];
//     $contrasena = $_POST['contrasena'];

//     // Consulta SQL para verificar el usuario y contraseña
//     $sql = "SELECT * FROM users WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
//     $result = $conn->query($sql);

 
//        if($result->num_rows > 0) {
//         // Usuario y contraseña son correctos
//         $_SESSION['usuario'] = $usuario;
//         $_SESSION['contrasena'] = $contrasena;
//         header("Location: home.php"); // Redirigir a la página de bienvenida
//     } else {
//         // Usuario y/o contraseña incorrectos
//         echo "Usuario y/o contraseña incorrectos. Intenta de nuevo.";
//     }
// }

// $conn->close();

?>

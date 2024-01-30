<?php
    session_start();
    
    //declaramos las variables a usar para la insercion a la base de datos 
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];



    // declaramos las variables para conexion a la base de datos 

    $servername = 'localhost';
    $database = 'loginsesion';
    $username = 'root';
    $password = "";



    //creamos el query para hacer la conexción a la base de datos 

    $conn = mysqli_connect($servername,$username, $password, $database);

    // verificamos la conexión con el siguiente query

    // if (!$conn) {
    //     die("Falló la conexión". mysqli_connect_error());
    
    // }else
    // echo"Conexión exitosa";



    //realizamos el query para hacer la inserción de registros dentro de la base de datos 

    $sql = "INSERT INTO users (nombre,apellidos,correo,usuario,contrasena,telefono) VALUES ('$nombre','$apellidos','$correo','$usuario','$contrasena','$telefono')";

    if (mysqli_query($conn,$sql)){
     
     header("location:home.php");
    }
        else
{
   echo'<script type="text/javascript">
        alert("No se pudo completar el registro");
        window.location.href="index.php";
        </script>';
}
mysqli_close($conn);
?>


?>

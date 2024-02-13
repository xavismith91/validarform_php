<?php

session_start();


$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$conexion=mysqli_connect("localhost", "root", "", "loginsesion");

if ($conexion->connect_error) 

{
    die("Conexión Fallida: " . $conn->connect_error);
}


?>
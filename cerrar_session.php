<?php  
    session_start();
    session_destroy();
    
    $varsesion = $_SESSION['usuario'];
    if ($varsesion == null || $varsesion = '') {
        echo'No tienes acceso a esta sección';   
        die();
    }

    session_destroy();
    header('Location:index.php');

?>
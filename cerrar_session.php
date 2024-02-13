<?php  
    session_start();
    
    if(isset($_SESSION['usuario'])){
        echo "existe sesion";
        session_destroy();
        header("location:index.php");
    }else{
        echo "No existe sesión";
        header("location:index.php");
    }

?>
<?php

session_start();
if(!isset($_SESSION['usuario_foca'])){
    header("location: login.php");
}
?>


PAGINA ACCEDIDA
<a href="logout.php">Cerrar Sesión</a>
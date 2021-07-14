<?php
require_once "../includes/class_user.php";
$user_sistema =new Usuario();
$resultado=$user_sistema->guardar_usuario
($_POST['identificacion'],
$_POST['nombres'],
$_POST['apellidos'],
$_POST['email'],
$_POST['pass']);
echo $resultado;
?>

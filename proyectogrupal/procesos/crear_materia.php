<?php
require_once "../includes/class_materia.php";
$user_sistema =new Materia();
$resultado=$user_sistema->guardar_materia
($_POST['nombre_materia']);
echo $resultado;
?>
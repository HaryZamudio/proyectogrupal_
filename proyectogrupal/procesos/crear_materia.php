<?php
require_once "../includes/class_materia.php";
$user_sistema =new Materia();
$resultado=$user_sistema->guardar_materia
($_POST['nombre_materia']);
header("location:http://localhost:8080/proyectogrupal_/proyectogrupal/modulos/materias/index.php");
echo $resultado;
?>
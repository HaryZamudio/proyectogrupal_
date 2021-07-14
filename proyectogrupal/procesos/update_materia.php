<?php
require_once "../includes/class_materia.php";
$materia = new Materia ();
$update_materia = $materia->actualiza_materia(
$_POST['id_materia'],
$_POST['nombre_materia'],
);
header("location:http://localhost:8080/proyectogrupal_/proyectogrupal/modulos/materias/index.php");
?>
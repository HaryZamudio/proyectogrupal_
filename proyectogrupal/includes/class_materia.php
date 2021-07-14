<?php

require_once "class_conexion.php";

class Materia extends Conexion{
    private $nombre_materia;


    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_bictia();
    }

function guardar_materia($nombre_materia_form){
        $this->nombre_materia=$nombre_materia_form;


        $query_consulta="INSERT INTO tb_materias(nombre)VALUES(?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->nombre_materia,

        ) ;
        $insert->execute($array_data_user);
        return "La materia ha sido registrada exitosamente";
    }
    function listar_materias(){
        $p_consulta = "SELECT * FROM tb_materias";
        $consulta = $this->conexion->query($p_consulta);
        $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }   
    function listar_materias_id($id){
        $g_consulta = "SELECT * FROM tb_materias WHERE id_materia = ?";
        $consulta = $this->conexion->prepare($g_consulta);
        $data_user = array($id);
        $consulta ->execute($data_user);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    function actualiza_materia($id,$nombre_materia){
        $this->nombre_materia=$nombre_materia;


        $query_update ="UPDATE tb_materias SET nombre=? WHERE id_materia=$id";
        $update= $this->conexion->prepare($query_update);
        $array_update=array(
            $this->nombre_materia,
        );
        $respuesta=$update->execute($array_update);
        return $respuesta;
}
function eliminar_materia($id){
    $query_delete ="DELETE FROM tb_materias WHERE id_materia=?";
    $delete= $this->conexion->prepare($query_delete);
    $array_delete=array($id);
    $delete->execute($array_delete);
    return "
    <script>
    Swal.fire(
        'Materia Eliminado!',
        'La materia ya no esta en la BD.',
        'success'
        )

    setTimeout('redireccion()', 2000);
    function redireccion(){
        window.location = 'location:http://localhost:8080/proyectogrupal_/proyectogrupal/modulos/materias/index.php';
    }
    </script>
    ";
}
}
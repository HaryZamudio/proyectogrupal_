<?php

require_once "class_conexion.php";

class Usuario extends Conexion{
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $email;
    private $pass;
    private $conexion;

    function __construct()
    {
        $this->conexion=new Conexion();
        $this->conexion =$this->conexion->conexion_bd_bictia();
    }

    function guardar_usuario($identificacion_form,$nombres_form,$apellidos_form,$email_form,$pass_form){
        $this->identificacion=$identificacion_form;
        $this->nombres=$nombres_form;
        $this->apellidos=$apellidos_form;
        $this->email=$email_form;
        $this->pass=$pass_form;

        $query_consulta="INSERT INTO tb_usuario(identificacion,nombre,apellido,correo,pass)VALUES(?,?,?,?,?)";
        $insert=$this->conexion->prepare($query_consulta);
        $array_data_user = array(
            $this->identificacion,
            $this->nombres,
            $this->apellidos,
            $this->email,
            $this->pass,
        ) ;
        $insert->execute($array_data_user);
        return "El usuario ha sido registrado exitosamente";
    }
    function listar_usuarios(){
        $p_consulta = "SELECT * FROM tb_usuario";
        $consulta = $this->conexion->query($p_consulta);
        $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function listar_usuarios_id($id){
        $g_consulta = "SELECT * FROM tb_usuario WHERE id_usuario = ?";
        $consulta = $this->conexion->prepare($g_consulta);
        $data_user = array($id);
        $consulta ->execute($data_user);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
}
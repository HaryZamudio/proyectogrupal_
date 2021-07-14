<?php
if($_POST){
    session_start();
    require_once "proyectogrupal/includes/class_conexion.php";
    $conex=new Conexion();
    $conex_login =$conex->conexion_bd_bictia();
    $conex_login->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $usuario_form=$_POST['correo_user'];
    $pass_user=$_POST['pass_user'];

    $sql = "SELECT * FROM tb_usuario WHERE correo= :usuario AND pass=:pass";
    $query =$conex_login->prepare($sql);
    $query->bindParam(':usuario',$usuario_form);
    $query->bindParam(':pass',$pass_user);
    $query->execute();

    $usuario_data=$query->fetch(PDO::FETCH_ASSOC);
    print_r($usuario_data);

    if($usuario_data){
      $_SESSION['usuario_foca']  =$usuario_data['id_usuario'];
      header("location:admin.php");
    }else {
        $error_login= "Usuario y/o contraseña incorrectas";
        header("location:proyectogrupal/index.php?e=".$error_login);
    }
}
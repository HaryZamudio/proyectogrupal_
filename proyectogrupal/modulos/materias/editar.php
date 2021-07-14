<?php
require_once "../../includes/class_materia.php";
$materia= new Materia();

$data_user = $materia->listar_materias_id($_GET['idMateria']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear</title>
    <link href="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css"  rel="stylesheet" type="text/css"  >
    <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"  >
</head>
<body>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="../../index.php"><img src="../../../img/logo.jpeg" weigth="80 "height="70"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon">   
           </span>
         </button>
   
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Estudiantes
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../estudiantes/index.php">Ver estudiantes</a>
              <a class="dropdown-item" href="../materias/index.php">Materias</a>
              <a class="dropdown-item" href="../archivos/archivosprofesor.php">Archivos</a>
           </div>
          </li>
          
       </ul> 
       <div class="usuario" class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <ul class="navbar-nav mr-auto" >
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Usuario
            </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../roles/index.php">Roles</a>
            <a class="dropdown-item" href="../usuario/index.php">Usuario</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="../../index.php">Cerrar sesion</a>
           </div>
          </li>
       </ul>
     </div>
  </nav>
     <div class="container"   >
        <div class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        Modificar materia
                        <td><a href="./index.php" class="btn btn-primary Materias" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
                    </div>
                    <div class="card-body">
                      <form method="POST" action="../../procesos/update_materia.php">
                        <table class="table">
                            <thead>
                                  <thbody>
                                    <tr>
                                       <label for="inputPassword5" class="form-label">Nombre</label>
                                        <input type="text" id="nombre_materia" name="nombre_materia" value="<?php echo $data_user['nombre']?>" class="form-control" aria-describedby="passwordHelpBlock">
                                        <input type="hidden" name=id_materia id="id_materia" value="<?php echo $_GET['idMateria'] ?>">
                                      </tr>
                                    <td><button class="btn btn-primary btn-lg" >Modificar</button> </td>
                                  </thbody>
                              </thead>
                          </table>
                      </form>
     
<script src="../../js/jquery-3.6.min.js"></script>
<script src="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
    <link href="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css"  rel="stylesheet" type="text/css"  >
    <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"  >
</head>
<!--Creado por Hary-->
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
            <a class="dropdown-item" href="../../modulos/estudiantes/index.php">Ver estudiantes</a>
            <a class="dropdown-item" href="../../modulos/materias/index.php">Materias</a>
            <a class="dropdown-item" href="../../modulos/archivos/archivosprofesor.php">Archivos</a>
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
          <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="../../index.php">Cerrar sesion</a>
         </div>
        </li>
     </ul>
   </div>
</nav>
    <div class="container">
        <div id="crear" class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h1>Descargas Disponibles</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Identificacion</th>
                                <th scope="col">Materia</th>
                                <th scope="col">Archivo</th>
                                <th scope="col">Herramientas</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#">Descargar</a>
                                    <a href="#">Eliminar</a>
                                </td>
                            </tr>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/jquery-3.6.min.js"></script>
    <script src="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
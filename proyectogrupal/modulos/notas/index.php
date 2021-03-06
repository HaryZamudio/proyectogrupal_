<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Estudiantes</title>
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
            Mi información
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../../modulos/notas/index.php">notas</a>
            <a class="dropdown-item" href="../../modulos/archivos/archivo.php">Archivos</a>
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
        <div class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        Mis notas: Laura Gonzalez Perez
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Materia</th>
                                <th scope="col">Nota 1</th>
                                <th scope="col">Nota 2</th>
                                <th scope="col">Nota 3</th>
                                <th scope="col">Nota 4</th>
                                <th scope="col">Nota 5</th>
                                <th scope="col">Observaciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Orquesta</th>
                                <td>8.5</td>
                                <td>9.0</td>
                                <td>7.5</td>
                                <td>8.0</td>
                                <td>10</td>
                                <td>Realizo las actividades correctamente, solo falta un mejor uso del instrumento.</td>
                              </tr>
                              <tr>
                                <th scope="row">Quimica</th>
                                <td>6.0</td>
                                <td>8.5</td>
                                <td>6.5</td>
                                <td>7.5</td>
                                <td>5.0</td>
                                <td>No corrigió las actividades de clase.</td>
                              </tr>
                              <tr>
                                <th scope="row">Sociales</th>
                                <td>10</td>
                                <td>10</td>
                                <td>9.5</td>
                                <td>9.0</td>
                                <td>10</td>
                                <td>Buen análisis y comprensión de los temas vistos en clase.</td>
                              </tr>
                              <tr>
                                <th scope="row">Educación Física</th>
                                <td>8.0</td>
                                <td>10</td>
                                <td>8.5</td>
                                <td>9.5</td>
                                <td>7.5</td>
                                <td>Buen trabajo, se puede mejorar respecto a la parte teórica.</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
   </div>

     <script src ="../../js/jquery-3.6.min.js"></script>
     <script src= "../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
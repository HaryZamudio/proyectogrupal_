<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link href="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/css/bootstrap.min.css"  rel="stylesheet" type="text/css"  >
    <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"  >
  </head>
  <!--Creado por Hary-->
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
     <div class="container">
                <div class="row justify-content-center">
            <div class="col-sm-9 col-xl-9">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">  
                        Modificar usuarios
                        <a href="./index.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <form>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Identificaci??n</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombres</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Apellidos</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre de usuario</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled   >
                                      </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Contrase??a</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Rol</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>Profesor</option>
                                          <option>Desarrollador</option>
                                          <option>Scrum master</option>
                                          <option>Product Owner</option>
                                        </select>
                                      </div>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                  </form>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
       </div>
    </div>
    <br>
    <br>
     <script src="../../js/jquery-3.6.min.js"></script>
     <script src="../../bootstrap-4.6.0-dist/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

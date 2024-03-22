<?php 

$conexion = mysqli_connect("localhost","root","","crud");

if(isset($_POST{'registrar'})) {

if(strlen($_POST['profesor']) 
>= 1 && strlen($_POST['alumno']) 
>= 1 && strlen($_POST['curso']) 
>= 1 && strlen($_POST['nivel']) 
>= 1 && strlen($_POST['fecha']) 
>= 1 && strlen($_POST['rol']) >=1) {

$profesor = trim($_POST['profesor']);
$alumno = trim($_POST['alumno']);
$curso = trim($_POST['curso']);
$nivel = trim($_POST['nivel']);
$fecha = trim($_POST['fecha']);
$rol = trim($_POST['rol']);

$consulta = "INSERT INTO desarrollo (profesor,alumno,curso,nivel,fecha,rol) VALUES ('$profesor','$alumno','$curso', '$nivel','$fecha','$rol')";

mysqli_query($conexion,$consulta);
mysqli_close($conexion);

header("location:index.php");

}

}

 ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>DESARROLLOS¡NKL!</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>

  <form  action="" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    
                            <br><br>
                          
                            <h2 style="font-weight: bold;" class="text-center text-white">Registrar cliente:</h2>
                            <div class="form-group">

                            <label style="font-weight: bold;" for="nombre" class="form-label text-white">Profesor:</label>
                            <input type="text"  id="profesor" name="profesor" class="form-control" placeholder="ingrese su profesor" required>
                            </div>

                            <div class="form-group">
                                <label style="font-weight: bold;" for="alumno" class="text-white">Alumno:</label><br>
                                <input type="text" name="alumno" id="alumno" class="form-control" placeholder="ingrese su alumno">
                            </div>
                        
                            <div class="form-group">
                            <label style="font-weight: bold;" for="curso" class="text-white">Curso:</label><br>
                                <input type="curso" name="curso" id="curso" class="form-control" placeholder="ingrese su curso" required>
                                 
                            </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="nivel" class="form-label text-white">Nivel:</label>
                                <input type="text"  id="nivel" name="nivel" class="form-control" placeholder="ingrese su nivel" required>
                                 
                           </div>

                           <div class="form-group">
                                  <label style="font-weight: bold;" for="fecha" class="form-label text-white">Fecha de inicio:</label>
                                <input type="date"  id="fecha" name="fecha" class="form-control" placeholder="ingrese su fecha" required>
                                 
                           </div>

                            <div class="form-group">
                                  <label style="font-weight: bold;" for="rol" class="form-label text-white">Fecha de culminar:</label>
                                <input type="date"  id="rol" name="rol" class="form-control" placeholder="ingrese su rol" required>
                                
                           </div>
                        
                                <div class="mb-3">
                                    
                               <input type="submit" value="Agregar"class="btn btn-warning" 
                               name="registrar">
                               <a href="index.php" class="btn btn-danger">Cancelar</a>
                               
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
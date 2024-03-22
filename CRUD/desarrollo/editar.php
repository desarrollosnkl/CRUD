<?php

include("../db.php");

if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $nkl = $conexion -> prepare("SELECT * FROM desarrollo WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    $registro = $nkl -> fetch(PDO::FETCH_LAZY);
    $profesor = $registro['profesor'];
    $alumno = $registro['alumno'];
    $curso = $registro['curso'];
    $nivel = $registro['nivel'];
    $fecha = $registro['fecha'];
    $rol = $registro['rol'];

}

if($_POST) {

$txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
$profesor = (isset($_POST['profesor'])?$_POST['profesor']:"");
$alumno = (isset($_POST['alumno'])?$_POST['alumno']:"");
$curso = (isset($_POST['curso'])?$_POST['curso']:"");
$nivel = (isset($_POST['nivel'])?$_POST['nivel']:"");
$fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");
$rol = (isset($_POST['rol'])?$_POST['rol']:"");

$nkl = $conexion -> prepare("UPDATE desarrollo SET profesor=:profesor,alumno=:alumno,curso=:curso,nivel=:nivel,fecha=:fecha,rol=:rol WHERE id=:txtid");

$nkl ->bindParam(":profesor",$profesor);
$nkl ->bindParam(":alumno",$alumno);
$nkl ->bindParam(":curso",$curso);
$nkl ->bindParam(":nivel",$nivel);
$nkl ->bindParam(":fecha",$fecha);
$nkl ->bindParam(":rol",$rol);
$nkl ->bindParam(":txtid",$txtid);

$nkl -> execute();

header("location:index.php");

}


?>

<!doctype html>
<html lang="es
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
                            
                    <h3 style="font-weight: bold;" class="text-center text-white">Modificar Tabla:</h3>
                        
              <form action="" method="post">

             
               <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>" placeholder="ingrese su nombre">

               <div class="form-group">
              <label style="font-weight: bold;" for="profesor" class="text-white">Profesor:</label>
               <input type="text" class="form-control" name="profesor" value="<?php echo $profesor; ?>" placeholder="ingrese su profesor">
              </div>

                <div class="form-group">
              <label style="font-weight: bold;" for="alumno" class="text-white">Alumno:</label>
               <input type="text" class="form-control" name="alumno" value="<?php echo $alumno; ?>" placeholder="ingrese su alumno">
                </div>

             <div class="form-group">
              <label style="font-weight: bold;" for="curso" class="text-white">Curso:</label>
               <input type="text" class="form-control" name="curso" value="<?php echo $curso; ?>" placeholder="ingrese su curso">
            </div>

            <div class="form-group"> 
              <label style="font-weight: bold;" for="nivel" class="text-white">Nivel:</label>
               <input type="text" class="form-control" name="nivel" value="<?php echo $nivel; ?>" placeholder="ingrese su nivel">
            </div>

            <div class="form-group">
               <label style="font-weight: bold;" for="fecha" class="text-white">Fecha de inicio:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">
            </div>
 
            <div class="form-group">
              <label style="font-weight: bold;" for="rol" class="text-white">Fecha de culminar:</label>
               <input type="date" class="form-control" name="rol" value="<?php echo $rol; ?>" placeholder="ingrese su rol">
            </div>

             <div class="modal-footer">
              <button type="submit" class="btn btn-warning">Actualizar</button>
              <a href="index.php" class="btn btn-danger">Cerrar</a>
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
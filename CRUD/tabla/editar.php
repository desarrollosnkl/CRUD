<?php

include("../db.php");

if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    $nkl = $conexion -> prepare("SELECT * FROM tabla WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    $registro = $nkl -> fetch(PDO::FETCH_LAZY);
    $acesor = $registro['acesor'];
    $alumno = $registro['alumno'];
    $curso = $registro['curso'];
    $nivel = $registro['nivel'];
    $pago = $registro['pago'];
    $fecha = $registro['fecha'];

}

if($_POST) {

$txtid = (isset($_POST['txtid'])?$_POST['txtid']:"");
$acesor = (isset($_POST['acesor'])?$_POST['acesor']:"");
$alumno = (isset($_POST['alumno'])?$_POST['alumno']:"");
$curso = (isset($_POST['curso'])?$_POST['curso']:"");
$nivel = (isset($_POST['nivel'])?$_POST['nivel']:"");
$pago = (isset($_POST['pago'])?$_POST['pago']:"");
$fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");

$nkl = $conexion -> prepare("UPDATE tabla SET acesor=:acesor,alumno=:alumno,curso=:curso,nivel=:nivel,pago=:pago,fecha=:fecha WHERE id=:txtid");

$nkl -> bindParam(":acesor",$acesor);
$nkl -> bindParam(":alumno",$alumno);
$nkl -> bindParam(":curso",$curso);
$nkl -> bindParam(":nivel",$nivel);
$nkl -> bindParam(":pago",$pago);
$nkl -> bindParam(":fecha",$fecha);
$nkl -> bindParam(":txtid",$txtid);

$nkl->execute();

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
              <label style="font-weight: bold;" for="acesor" class="text-white">Acesor:</label>
               <input type="text" class="form-control" name="acesor" value="<?php echo $acesor; ?>" placeholder="ingrese su acesor">
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
               <label style="font-weight: bold;" for="pago" class="text-white">Pago:</label>
               <input type="text" class="form-control" name="pago" value="<?php echo $pago; ?>" placeholder="ingrese su pago">
            </div>
 
            <div class="form-group">
              <label style="font-weight: bold;" for="fecha" class="text-white">Fecha:</label>
               <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" placeholder="ingrese su fecha">
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
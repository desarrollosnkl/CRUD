<?php 
include('../db.php');

$nkl = $conexion -> prepare("SELECT *FROM tabla");
$nkl -> execute();
$tabla = $nkl -> fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$nkl = $conexion -> prepare("DELETE FROM tabla WHERE id=:txtid");
$nkl -> bindParam(":txtid",$txtid);
$nkl -> execute();

header("location:index.php");

}

?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">DESARROLLOS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla del Acesor:</h2>

<a style="background: #0766AD;" class="btn text-white fw-bold" href="agregar.php">Nuevo Registro
<img src="../img/user.svg" alt=""></i> 
</a>

<a style="background: #2B2A4C;" class="btn text-white fw-bold" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>

<a style="background: yellow;" class="btn text-black fw-bold" href="../PDF/PruebaV.php" target="_blank">PDF
<img src="../img/pdf.svg" alt=""></a>
<br>

<br>
</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>
<br>

<div class="table-responsive">
<table class="table table-bordered table-primary table_id">
  <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ACESOR</th>
                <th scope="col">ALUMNO</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">PAGO</th>
                <th scope="col">FECHA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($tabla as $tablas) { ?>

            <tr class="">
                <td scope="row"><?php echo $tablas['id']; ?></td>
                <td><?php echo $tablas['acesor']; ?></td>
                <td><?php echo $tablas['alumno']; ?></td>
                <td><?php echo $tablas['curso']; ?></td>
                <td><?php echo $tablas['nivel']; ?></td>
                <td><?php echo $tablas['pago']; ?></td>
                <td><?php echo $tablas['fecha']; ?></td>

                <td>
                 <a style="background: #0766AD;" class="btn text-white" href="editar.php?id=<?php echo $tablas['id']; ?>" role="buttun"><img src="../img/editar.svg" alt=""></a>
 
                <a style="background: #2B2A4C;" class="btn text-white" href="javascript:borrar(<?php echo $tablas['id']; ?>)" role="button"><img src="../img/eliminar.svg" alt=""></a>
                </td>

            </tr>

<?php } ?>

        </tbody>
    </table>
</div>
</div>

<script>

function borrar(id) {

    Swal.fire({
  title: '¿Deseas Borrar el registro?',
  showCancelButton: true,
  confirmButtonText: 'Si, Borrar',
}).then((result) => {
  if (result.isConfirmed) {
  
window.location ="index.php?id="+id;

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})

}

</script>


<?php include("../template/footer.php"); ?>
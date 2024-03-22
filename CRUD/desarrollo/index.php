<?php 
include("../db.php");

$nkl = $conexion -> prepare("SELECT *FROM desarrollo");
$nkl -> execute();
$desarrollo = $nkl -> fetchAll(PDO::FETCH_ASSOC);

// ELIMINAR DE LA TABLA...  

if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");

    $nkl = $conexion -> prepare("DELETE FROM desarrollo WHERE id=:txtid");
    $nkl -> bindParam(":txtid",$txtid);
    $nkl -> execute();

    header("location:index.php");
}


 ?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">DESARROLLOS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Profesores:</h2>

<a style="background:slateblue;" class="btn text-white fw-bold" href="agregar.php">Nuevo Registro
<img src="../img/user.svg" alt=""></i> 
</a>

<a style="background: crimson;" class="btn text-white fw-bold" href="excel.php">Excel
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
                <th scope="col">PROFESOR</th>
                <th scope="col">ALUMNO</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">FECHA | INICIO</th>
                <th scope="col">FECHA | CULMINAR</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($desarrollo as $desarrollos) { ?>

            <tr class="">
                <td scope="row"><?php echo $desarrollos['id']; ?></td>
                <td><?php echo $desarrollos['profesor']; ?></td>
                <td><?php echo $desarrollos['alumno']; ?></td>
                <td><?php echo $desarrollos['curso']; ?></td>
                <td><?php echo $desarrollos['nivel']; ?></td>
                <td><?php echo $desarrollos['fecha']; ?></td>
                <td><?php echo $desarrollos['rol']; ?></td>

    <td>
        <a style="background: crimson;" href="editar.php?id=<?php echo $desarrollos['id']; ?>" class="btn text-white" role="button"><img src="../img/editar.svg" alt=""></a>

        <a style="background: navy;" href="javascript:borrar(<?php echo $desarrollos['id']; ?>);" class="btn text-white" role="button"><img src="../img/eliminar.svg" alt=""></a>
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
<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM desarrollo");
$stm -> execute();
$desarrollo = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
                <th scope="col">PROFESOR</th>
                <th scope="col">ALUMNO</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">FECHA DE INICIO</th>
                <th scope="col">FECHA DE CULMINAR</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($desarrollo as $desarrollos){ ?>
    <tr>
    <th scope="row"><?php echo $desarrollos['id']; ?></th>
      <td><?php echo $desarrollos['profesor']; ?></td>
      <td><?php echo $desarrollos['alumno']; ?></td>
      <td><?php echo $desarrollos['curso']; ?></td>
      <td><?php echo $desarrollos['nivel']; ?></td>
      <td><?php echo $desarrollos['fecha']; ?></td>
      <td><?php echo $desarrollos['rol']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>
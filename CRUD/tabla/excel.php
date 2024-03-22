<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM tabla");
$stm -> execute();
$tabla = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
                <th scope="col">ACESOR</th>
                <th scope="col">ALUMNO</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">PAGO</th>
                <th scope="col">FECHA</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($tabla as $tablas){ ?>
    <tr>
    <th scope="row"><?php echo $tablas['id']; ?></th>
      <td><?php echo $tablas['acesor']; ?></td>
      <td><?php echo $tablas['alumno']; ?></td>
      <td><?php echo $tablas['curso']; ?></td>
      <td><?php echo $tablas['nivel']; ?></td>
      <td><?php echo $tablas['pago']; ?></td>
      <td><?php echo $tablas['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>
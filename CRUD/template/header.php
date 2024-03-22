<?php

$url_base ="http://localhost/crud/";

?>

<!doctype html>
<html lang="en">

<head>
  <title>SYSTEMS¡NKL!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="shortcut icon" href="../../CRUD/img/icono1 copy.png" type="image/x-icon">
</head>

<style>
    
    .navbar-brand {
      color: whitesmoke;
    }

    .navbar-brand:hover {
        color:wheat;
    }

.nav-link {
    color: whitesmoke;

}

.nav-link:hover {
    color:wheat;
}


</style>


<body>
  
<nav style="background: #1d2c3f" class="navbar navbar-expand-sm navbar-dark">
      <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo $url_base; ?>">SYSTEMS¡NKL!</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link  fw-bold" href="<?php echo $url_base; ?>contactos" aria-current="page">Tabla de Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fw-bold" href="<?php echo $url_base; ?>tabla">Tabla de Acesores</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  fw-bold" href="<?php echo $url_base; ?>desarrollo">Tabla de Profesores</a>
                </li>

            </ul>

<form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
</form>

            <button type="submit" class="btn btn-danger fw-bold" data-toggle="modal" data-target="#create">
            Salir
           </button>

           <!-- <a style="background: brown;" href="../../CRUD/validar/login.php" class="btn text-white fw-bold" role="button">Cerrar Sesion</a>-->
      
        </div>
  </div>
</nav>

<main class="contenedor">

<?php include("create.php"); ?>
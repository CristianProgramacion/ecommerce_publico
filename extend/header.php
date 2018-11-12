<?php include '../conexion/conexion.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
        body{
            padding-bottom: 10px;
        }
      </style>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a href="#" class="navbar-brand">Ecommerce</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-auto">
                <a href="../inicio/index.php" class="nav-link">Inicio</a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelleby="navbarDropdown">
                    <a href="../inicio/categorias.php?opc=GENERAL" class="dropdown-item">General</a>
                    <a href="../inicio/categorias.php?opc=PANTALONES" class="dropdown-item">PANTALONES</a>
                    <a href="../inicio/categorias.php?opc=CASACAS" class="dropdown-item">CASACAS</a>
                    <a href="../inicio/categorias.php?opc=VESTIDOS" class="dropdown-item">VESTIDOS</a>
                    <a href="../inicio/categorias.php?opc=BLUSAS" class="dropdown-item">BLUSAS</a>
                    <a href="../inicio/categorias.php?opc=CAMISAS" class="dropdown-item">CAMISAS</a>
                </div>
            </li>
        </ul>
        <button class="btn btn-dark" id="logout">Salir</button>
    </div>
</nav>
    
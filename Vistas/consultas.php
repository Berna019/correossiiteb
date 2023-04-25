<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include("../Config/Conexion.php");
$sql = $conexion->query("select * from contacto");
if (isset($_POST['buscar'])) {
    $nombres = $_POST['nombres'];
    $sql = $conexion->query("select * from contacto where nombre_completo like '%$nombres%'");
}
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contacto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="shortcut icon" href="Imagenes/icoSIITEB.ico">
        <link rel="stylesheet" href="../styles/consultas.css">
    </head>

    <body>
        <nav class="container navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Menu</a>
                <form class="d-flex" action="consultas.php" method="post">
                    <input class="form-control me-2" name="nombres" placeholder="Search">
                    <input class="btn btn-outline-success" name="buscar" type="submit" value="Buscar">
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Vistas/consultas.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../Vistas/contacto.php">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container table-responsive mt-2">
            <table class="table table-sm align-middle">
                <thead>
                    <tr>
                        <th scope="col">Folio</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Asunto</th>
                    </tr>
                </thead>
<?php
$no = 1;
while ($row = $sql->fetch_assoc()) {
    echo
    //inicia html
    "
        <tr>
        <td>{$row['idcontacto']}</td>
        <td>{$row['nombre_completo']}</td>
        <td>{$row['telefono']}</td>
        <td>{$row['correo']}</td>
        <td>{$row['asunto']}</td>
        </tr>
        ";
    +
            $no++;
    //termina html
}
?>
            </table>
        </div>
        <div class="container-fluid text-center mt-5">
            <p class="small">$copyright: Todos los drechos reservados</p>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
                integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
                integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    </body>
</html>
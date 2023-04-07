<?php
include ("../Config/Conexion.php");

$sql = $conexion->query("select * from contacto");
?>
<link rel="shortcut icon" href="Imagenes/icoSIITEB.ico">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<table class="container table table-striped-columns">
    <tr>
        <td >Folio</td>
        <td>Nombre completo</td>
        <td>Telefono</td>
        <td>Correo</td>
    </tr>
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
        </tr>
        ";
        +
                $no ++;
        //termina html
    }
    ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<a href="../index.php" class="btn btn-outline-dark col-3 d-grid mx-auto">Regresar</a>

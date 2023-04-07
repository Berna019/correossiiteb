<?php
include ("../Config/Conexion.php");

$sql = $conexion->query("select * from contacto");
?>

<table border="">
    <tr>
        <td>Folio</td>
        <td>Nombre completo</td>
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
        </tr>
        ";+
        $no ++;
        //termina html
    }
    ?>
</table>

<?php

include ("../Config/Conexion.php");

$nombre = $_POST['Nombre'];
$telefono = $_POST['Telefono'];
$correo = $_POST['Correo'];
$asunto = $_POST['Asunto'];
$mensaje = $_POST['Mensaje'];

$sql = "insert into contacto(nombre_completo,telefono,correo,asunto,mensaje) values ('$nombre','$telefono','$correo','$asunto','$mensaje')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    header("location:../index.php");
} else {
    echo "Dato no insertados";
}
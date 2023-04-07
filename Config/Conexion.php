<?php

$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "be30ba02e42168";
$db_pass = "4bc4ed37";
$db_name = "heroku_62e113c8fbf1ad5";

$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (!$conexion) {
    echo 'Conexion fallida';
}
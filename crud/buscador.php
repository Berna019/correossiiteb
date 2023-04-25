<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buscador</title>

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
        <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
    </head>
    <body>
        <?php include("../Config/Conexion.php"); ?>
        <div class="container mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Buscador</h4>
                                <form id="form2" name="form2" method="POST" action="index.php">
                                    <div class="col-12 row">
                                        <div class="col-11">
                                            <label  class="form-label">Nombre a buscar</label>
                                            <input type="text" class="form-control" id="buscar" name="buscar" value="<?php echo $_POST["buscar"] ?>" >     
                                        </div>
                                        <div class="col-1">
                                            <input type="submit" class="btn btn-success" value="Ver" style="margin-top: 30px;">
                                        </div>
                                    </div>
                                    <?php
                                    $sql = mysql_query("SELECT * FROM contacto WHERE nombre_completo LIKE '%" . $_POST["buscar"] . "%' OR telefono LIKE '%" . $_POST["buscar"] . "%' OR correo LIKE '%" . $_POST["buscar"] . "%'");
                                    $numeroSql = mysql_num_rows($sql);
                                    ?>
                                    <p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> Resultados encontrados</p>
                                </form>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr style="background-color: #00695c; color:#FFFFFF;">
                                                <th style=" text-align: center;"> Nombre </th>
                                                <th style=" text-align: center;"> Departamento </th>
                                                <th style=" text-align: center;"> Color </th>
                                                <th style=" text-align: center;"> Fecha </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($rowSql = mysql_fetch_assoc($sql)) { ?>
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $rowSql["nombre_completo"]; ?></td>
                                                    <td style="text-align: center;"><?php echo $rowSql["telefono"]; ?></td>
                                                    <td style="text-align: center;"><?php echo $rowSql["correo"]; ?></td>
                                                    <td style="text-align: center;"><?php echo $rowSql["asunto"]; ?></td>
                                                </tr>  
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
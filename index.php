<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contacto</title>
        <link rel="shortcut icon" href="Imagenes/icoSIITEB.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <br>
            <form class="row" style="margin-left: 400px ;" action="crud/enviar.php" method="POST">
                <fieldset>
                    <div class="col-6">
                        <label for="">Nombre Completo</label>
                        <input type="text" class="form-control" name="Nombre">
                    </div>
                    <br>
                    <div class="col-6">
                        <label class="">Telefóno</label>
                        <input type="text" class="form-control" name="Telefono">
                    </div>
                    <br>
                    <div class="col-6">
                        <label class="">Correo</label>
                        <input type="text" class="form-control" name="Correo">
                    </div>
                    <br>
                    <div class="col-6">
                        <label class="">Asunto</label>
                        <input type="text" class="form-control" name="Asunto">
                    </div>
                    <div class="col-6">
                        <label class="">Mensaje</label>
                        <input type="text" class="form-control" name="Mensaje">
                    </div>
                    <br>
                    <div class="vstack gap-2 col-6">
                        <button type="submit" class="btn btn-dark col-6 d-grid mx-auto">Enviar</button>
                        <a href="#" class="btn btn-outline-dark col-6 d-grid mx-auto">Cancelar</a>
                        <p><a class="link-opacity-50 col-3 d-grid mx-auto" href="Vistas/consultas.php">Ir a consultas</a></p>
                    </div>
                </fieldset>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

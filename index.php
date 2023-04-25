<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0y">
        <title>Contacto</title>
        <link rel="shortcut icon" href="Imagenes/icoSIITEB.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/styleEnviar.css">
    </head>
    <body>
        <div class="container w-100 mt-5 shadow rounded">
            <div class="row align-items-stretch">
                <div class="col bg d-none d-lg-block rounded">

                </div>
                <div class="col p-6">
                    <div class="text-center">
                        <img class="img img-center" src="Imagenes/SIITEB NEGRO.png" width="100" >
                    </div>
                    <h2 class="fw-bold text-center py-5">Bienvenido Administrador</h2>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label"> Nombre de Usuario</label>
                            <input type="email" class="form-control" name="Usuario">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="Usuario">
                        </div>
                        <div class="d-grid">
                            <a href="Vistas/consultas.php" class="btn btn-primary">Iniciar</a>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

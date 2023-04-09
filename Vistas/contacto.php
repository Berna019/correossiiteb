<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Contacto</title>
        <link rel="shortcut icon" href="Imagenes/icoSIITEB.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/styleEnviar.css">
    </head>
    <body>
        <section>
            <div class="row g-0">
                <div class="col-lg-4 d-none d-lg-block">

                </div>
                <div class="col-lg-5 d-flex  flex-column align-items-end min-vh-100">
                    <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                        <form class="mb-5" action="../crud/enviar.php" method="POST">
                            <div class="mb-4">
                                <label for="form-label font-weight-bold">Nombre Completo</label>
                                <input type="text" class="form-control" name="Nombre">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Telefóno</label>
                                <input type="text" class="form-control" name="Telefono">
                            </div>
                            <div class="mb-4">
                                <label class="">Correo</label>
                                <input type="text" class="form-control" name="Correo">
                            </div>
                            <div class="mb-4">
                                <label class="">Asunto</label>
                                <input type="text" class="form-control" name="Asunto">
                            </div>
                            <div class="mb-4">
                                <label class="">Mensaje</label>
                                <textarea class="form-control" name="Mensaje" placeholder="Escriba su mensaje aqui"></textarea>
                            </div>
                            <div class="vstack gap-2 d-grid">
                                <button type="submit" class="btn btn-dark col">Enviar</button>
                                <a href="../Vistas/consultas.php" class="btn btn-outline-dark">Regresar</a>
                            </div>
                        </form>
                    </div>   
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

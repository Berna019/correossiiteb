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
    <?php include '../Config/Conexion.php'; ?>
    <div class="container">
        <div>
            <label class="form-label">Palabra a buscar</label>
            <input class="form-control me-2" type="text" class="form-control" id="buscar" name="buscar">

            <label class="form-label">Palabra a buscar</label>
            <input class="form-control me-2" type="text" class="form-control" id="buscar_1" name="buscar_1">
        </div>
        <button onclick="buscar_ahora($('#buscar').val());" class="btn btn-primary">Buscar</button>
        <div>
            <div>
                <div id="datos_buscador" class="container pl-5 pr-5"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function buscar_ahora(buscar) {
            var parametros = {"buscar": buscar};
            $.ajax({
                data: parametros,
                type: 'POST',
                url: '../crud/buscador.php',
                success: function (data) {
                    document.getElementById(datos_buscador).innerHTML = data;
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="funciones.js" type="text/javascript"></script>
    <script src="funciones.js" type="text/javascript"></script>
    <link href="estilo/ESTILO.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EVALUACION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="tablaVen.php">Detalle de venta<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="productos.php">Productos</a>
                <a class="nav-link" href="clientes.php">Clientes</a>

            </div>
        </div>
    </nav>
    <br><br><br><br><br>
    <div class="container">
        <form action="insertar.php" method="POST">

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Serie</label>
                    <input type="text" class="form-control"  name="serie"  id="serie" placeholder="12365"required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Numero</label>
                    <input type="text" class="form-control"  name="numero"  id="numero" placeholder="12544" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Total</label>
                    <input type="text" class="form-control" name="total"  id="total" placeholder="$00" required>
                </div>
            </div>
           
           <br><br>
            <button class="btn btn-primary"  name="btnEnviar" type="submit">Enviar</button>
        </form>
     
       

    </div>






</body>

</html>
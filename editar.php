<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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
    <?php
    include 'BD/BD.php';
    $IdDetalleVenta = filter_input(INPUT_GET, '?');
    $IdVenta = filter_input(INPUT_POST, 'IdVenta');
    $IdVenta = filter_input(INPUT_POST, 'IdProducto');
    $Cantidad = filter_input(INPUT_POST, 'Cantidad');
    $Precio = filter_input(INPUT_POST, 'Precio');
    $Subtotal = filter_input(INPUT_POST, 'Subtotal');

    $sql12 = "SELECT * FROM `detalle_venta` WHERE IdDetalleVenta= '$IdDetalleVenta'";
    $result = mysqli_query($conexion, $sql12);

    while ($fila = mysqli_fetch_assoc($result)) {
    ?>
        <br>
        <div class="container">

            <form>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <br><br>
                        <label for="validationDefault01">Serie</label>
                        <input type="text" class="form-control" name="IdDetalleVenta" id="IdDetalleVenta" value="<?php echo $fila['IdDetalleVenta']; ?>"  placeholder="12365" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <br><br>
                        <label for="validationDefault02">Numero</label>
                        <input type="text" class="form-control" name="IdVenta" id="IdVenta"  value="<?php echo $fila['IdVenta']; ?>" placeholder="12544" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <br><br>
                        <label for="validationDefault02">Total</label>
                        <input type="text" class="form-control" name="IdProducto" id="IdProducto" value="<?php echo $fila['IdProducto']; ?>"  placeholder="$00" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">IdDetalleVenta</label>
                        <input type="text" class="form-control" name="Cantidad" id="Cantidad"  value="<?php echo $fila['Cantidad']; ?>" placeholder="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">IdVenta</label>
                        <input type="text" class="form-control" name="Precio" id="Precio" value="<?php echo $fila['Precio']; ?>"  placeholder="" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">IdProducto</label>
                        <input type="text" class="form-control" name="Subtotal" id="Subtotal" value="<?php echo $fila['Subtotal']; ?>"  placeholder="" required>
                    </div>
                </div>
                <br><br>
      
            <input name="btnActualizar" type="submit" value="Actualizar" type="button" class="btn btn-secondary active" />
      
        </div>

        

        </form>

    <?php } ?>
    </div>
    <?php
    $idDetalleVenta = filter_input(INPUT_GET, 'IdDetalleVenta');
    $idVenta = filter_input(INPUT_GET, 'IdVenta');
    $idProducto = filter_input(INPUT_GET, 'IdProducto');
    $cantidad = filter_input(INPUT_GET, 'Cantidad');
    $precio = filter_input(INPUT_GET, 'Precio');
    $subtotal = filter_input(INPUT_GET, 'Subtotal');

    if ($idVenta != NULL || $idProducto != NULL || $cantidad != NULL || $precio != NULL || $subtotal != NULL) {
        $sql2 = "update detalle_venta set IdVenta='" . $idVenta . "', IdProducto='" . $idProducto . "',Cantidad='" . $cantidad . "', "
            . "Precio='" . $precio . "', Subtotal='" . $subtotal . "'";
        mysqli_query($conexion, $sql2);
        if ($venta = 1) {
            header("location: tablaVen.php");
        }
    }
    ?>


</body>

</html>
<?php
include './Consultas/ConscultaVen.php';
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="funciones.js" type="text/javascript"></script>
    <script src="funciones.js" type="text/javascript"></script>
<link href="ESTILO.css" rel="stylesheet" type="text/css" />

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
        <div class="container" data-role="page" id="pageone">
             <div  data-role="header" id="h1">
                </div>
            <button id="btn" type="button"  class="btn btn-link"> <a href="index.php">Regresar</a></button>
            <div ddata-role="main" class="ui-content">
                <table  class="table table-bordered"  id="myTable">
                    <br><br><br>
                    <thead>
                        <tr>
                        <th data-priority="1">IdDetalleVenta</th>
                            <th data-priority="2">IdVenta</th>
                            <th data-priority="3">IdProducto</th>
                            <th data-priority="4">Cantidad</th>
                            <th data-priority="5">Precio</th>
                            <th data-priority="6">Subtotal</th>
                            <th data-priority="7">Actualizar</th>
                        </tr>
                    </thead>
                    <tbody >

                        <?php
                    
                        while ($venta = mysqli_fetch_assoc($resul)) {
                            ?>
                            <tr>
                                
                            <td> <?php echo $venta['IdDetalleVenta']; ?></td>
                                <td><?php echo $venta['IdVenta']; ?></td>
                                <td><?php echo $venta['IdProducto']; ?></td>
                                <td><?php echo $venta['Cantidad']; ?></td>
                                <td><?php echo $venta['Precio']; ?></td> 
                                <td><?php echo $venta['Subtotal']; ?></td>
                                <td>                               
                                    <a  href="editar.php??=<?php echo $venta['IdDetalleVenta']; ?>">Editar</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

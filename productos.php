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
    <link href="estilo/ESTILO.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">EVALUACION</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active" href="tablaVen.php">Detalle de venta<span class="sr-only">(current)</span></a>
                <a class="nav-link" href="productos.php">Productos</a>
                <a class="nav-link" href="clientes.php">Clientes</a>
        </div>
    </nav>
        <div class="container" data-role="page" id="pageone">
             <div  data-role="header" id="h1">
                </div>
            <div ddata-role="main" class="ui-content">
                <table  class="table table-bordered"  id="myTable">
                    <br><br><br>
                    <thead>
                        <tr>
                        <th data-priority="1">IdProducto</th>
                            <th data-priority="2">Nombre</th>
                            <th data-priority="3">Precio</th>
                       
                        </tr>
                    </thead>
                    <tbody >

                        <?php
                    
                        while ($producto = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                
                            <td> <?php echo $producto['IdProducto']; ?></td>
                                <td><?php echo $producto['Nombre']; ?></td>
                                <td><?php echo $producto['Precio']; ?></td>
                              
                               
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <br><br><br>
            <div class="col text-center">
            <button id="btn" type="button"  class="btn btn-link"> <a href="index.php">Regresar</a></button>
            </div>

        </div>
    </body>
</html>

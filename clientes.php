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
                        <th data-priority="1">IdCliente</th>
                            <th data-priority="2">Ruc</th>
                            <th data-priority="3">Razon social</th>
                        
                        </tr>
                    </thead>
                    <tbody >

                        <?php
                    
                        while ($cliente = mysqli_fetch_assoc($result2)) {
                            ?>
                            <tr>
                                
                            <td> <?php echo $cliente['IdCliente']; ?></td>
                                <td><?php echo $cliente['Ruc']; ?></td>
                                <td><?php echo $cliente['Razon social']; ?></td>     
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

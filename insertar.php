        <?php
   include './BD.php';

if (isset($_POST['btnEnviar'])) {
 

    $var = '3';
    $var2 = '3';
    $var3 = '3';
    $var4 = '3';
    $serie = $_POST['serie'];
    $numero = $_POST['numero'];
    $total= $_POST['total'];
    

    $resultado = "INSERT INTO venta (`IdVenta`,`IdTipoDocumento`,`Serie`,`Numero`, `IdCliente`, `Total`, "
            . "`IdUsuario`)"
            . "VALUES('" . $var . "','" . $var4 . "','" . $serie . "','" . $numero . "', '" . $var2 . "','" . $total . "', '" . $var3 . "'); ";
    if (mysqli_query($conexion, $resultado)) {
        header("location: tablaVen.php");
    } else {
        echo "Error: " . $resultado . "<br>" . mysqli_error($conexion);
    }

    mysqli_close($conexion);
    echo "¡Gracias! Hemos recibido sus datos.\n";
} else {
    ?>
    <?php

}
?>  


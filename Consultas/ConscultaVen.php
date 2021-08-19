<?php

include 'BD/BD.php';
$sql = "SELECT * FROM `detalle_venta` ";
$resul = mysqli_query($conexion, $sql);

$sql1 = "SELECT * FROM `cliente` ";
$result = mysqli_query($conexion, $sql1);

$sql2 = "SELECT * FROM `producto` ";
$result2 = mysqli_query($conexion, $sql2);
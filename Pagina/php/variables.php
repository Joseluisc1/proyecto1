<?php 
include ('conexion.php');



if (isset($_POST ['enviar'])){
if (strlen($_POST['nombre']) >= 1 &&
    strlen($_POST['marca']) >= 1 &&
    strlen($_POST['lote']) >= 1 &&
    strlen($_POST['fecha'])>=1){
    $nombre = trim($_POST['nombre']);
    $marca = trim($_POST['marca']);
    $lote = trim($_POST['lote']);
    $fecha = trim($_POST['fecha']);
    $consulta = "INSERT INTO producto(nombre_producto, marca, lote, fecha_venci) VALUES ('$nombre','$marca','$lote','$fecha')";
    $resultado = mysqli_query( $conexion, $consulta);

    }
    }
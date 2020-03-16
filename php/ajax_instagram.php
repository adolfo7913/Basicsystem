<?php
include 'conexion.php';
$cadena		= $_POST['nombre'];
$nombre		= substr($cadena, 0, 4);
$apellido_p = substr($cadena, -4);
$query1='SELECT instagram FROM persona WHERE nombre LIKE "%'.$nombre.'%" AND apellido_p LIKE "%'.$apellido_p.'%"';
$resultado=mysqli_query($conexion, $query1);
$row=mysqli_fetch_array($resultado);
echo $row['instagram'];
?>
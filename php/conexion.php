<?php
$usuario	='id12947697_root';
$pass		='adolf7913';
$servidor	='localhost';
$basededatos='id12947697_prueba';

$conexion= mysqli_connect($servidor, $usuario, $pass) or die('No se ha podido conectar al servidor de Base de datos');
$db=mysqli_select_db($conexion, $basededatos) or die('No se ha podido conectar al servidor de Base de datos');
?>
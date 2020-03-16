<?php
include 'conexion.php';
$nombre		= $_POST['nombre'];
$apellido_p	= $_POST['apellido_p'];
$apellido_m	= $_POST['apellido_m'];
$telefono	= $_POST['telefono'];
$direccion	= $_POST['direccion'];
$facebook	= $_POST['facebook'];
$twitter	= $_POST['twitter'];
$instagram	= $_POST['instagram'];

$query1='SELECT Id FROM persona ORDER BY Id DESC LIMIT 1';
$resultado=mysqli_query($conexion, $query1);
$row=mysqli_fetch_array($resultado);
$id= $row['Id'] + 1;

$query='INSERT INTO persona(Id, Nombre, Apellido_p, Apellido_m, Telefono, Direccion, Facebook, Twiter, Instagram, Estatus) VALUES ('.$id.', "'.$nombre.'","'.$apellido_p.'","'.$apellido_m.'","'.$telefono.'","'.$direccion.'","'.$facebook.'","'.$twitter.'","'.$instagram.'",1)';
if(mysqli_query($conexion, $query)){
	echo "<script>alert('Persona registrada correctamente.');window.location.href='../alta.html';</script>";
} else{
	echo "<script>alert('Registro fallido.');window.location.href='../alta.html';</script>";
}
?>
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
$id			= $_POST['id_user'];

$query='UPDATE persona SET Nombre ="'.$nombre.'", Apellido_p="'.$apellido_p.'", Apellido_m="'.$apellido_m.'", Telefono="'.$telefono.'", Direccion="'.$direccion.'", Facebook="'.$facebook.'", Twiter="'.$twitter.'", Instagram="'.$instagram.'",Estatus = 2 WHERE Id = "'.$id.'"';
if(mysqli_query($conexion, $query)){
	echo "<script>alert('Registro editado correctamente.');window.location.href='../editar.php';</script>";
} else{
	echo "<script>alert('Registro fallido.');window.location.href='../editar.php';</script>";
}
?>
<?php
include 'conexion.php';
$usuario		= $_POST['usuario'];
$contrasenia 	= $_POST['contrasenia'];

$query='SELECT usuario FROM usuarios WHERE usuario= "'.$usuario.'" AND pass= "'.$contrasenia.'" ';
$resultado=mysqli_query($conexion, $query);
$row=mysqli_fetch_array($resultado);
if($usuario==$row['usuario'])
{
	header('Location: ../inicio.html');
}
else
{
	echo "<script>alert('Usuario y/o contraseñas incorrectos, favor de verificar.');window.location.href='../index.html';</script>";
}
/*while($row=mysqli_fetch_array($resultado))
{
	echo $row['usuario'];
}*/
?>
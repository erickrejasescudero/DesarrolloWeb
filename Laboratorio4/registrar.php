<?php
include ("conexion.php");
$usuario=$_GET['txtUsuario'];
$nombre=$_GET['txtNombres'];
$apellido=$_GET['txtApellidos'];
$correo=$_GET['txtCorreo'];
$password=$_GET['txtPassword'];
	$sql="insert into usuario(usuario, nombre, apellido, correo, password) values ('$usuario', '$nombre','$apellido','$correo', '$password')";
	$resultado=$con->query($sql);
	if ($resultado)
	{
		echo "Se inserto con exito";
	}
	else
		echo "Ocurrio un error";
?>
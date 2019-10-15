<?php session_start(); 
    include('conexion.php');
    $usuario=$_POST["txtUsuario"];
    $password=$_POST["txtPassword"];
    $rusuario=$_POST["rUsuario"];
    $rpassword=$_POST["rPassword"];
	if ($rusuario=='recordarU') {
		setcookie('rUsuario',$usuario,time()+3600);
	}
	if ($rpassword=='recordarP') {
		setcookie('rPassword',$password,time()+3600);
	}

	$sql = "Select nombres from usuarios WHERE correo='$usuario' AND password='$password' ";
	$resultado=$con->query($sql); 
if ($fila=$resultado->fetch_assoc()) 
		{
		$_SESSION['nombres']=$fila['nombres'];
		echo "Bienvenido: ".$_SESSION['nombres'];
		header("Location:fintroduccion.html");
		
		}
		else
		{	
		 echo "Error datos incorrectos de inicio de sesion";
		header("Location:formlogin.php");
		} 
?>
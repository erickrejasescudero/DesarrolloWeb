<?php
include ("conexion.php");

	$sql="SELECT usuario, nombre, apellido, correo, password FROM usuario";
	$resultado=$con->query($sql);
?>

<table >
	<tr>
		<th>Usuario</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Correo</th>
		<th>Password</th>
</tr>

<?php 
$i=0;
while ($fila=$resultado->fetch_assoc())
{ $i++;
 ?><tr class="<?php if ($i%2==0) 
 				echo "azul";
 				else
 				echo "celeste";
 				?>">
 	<td><?php echo $fila['usuario']; ?></td>
 	<td><?php echo $fila['nombre']; ?></td>
	<td><?php echo $fila['apellido']; ?></td>
	<td><?php echo $fila['correo']; ?></td>
	<td><?php echo $fila['password']; ?></td>

</tr>
<?php
}

?>
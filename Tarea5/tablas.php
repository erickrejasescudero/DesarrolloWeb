<?php
	$filas = $_GET["texta"];
	$altura = $_GET["textb"];
	$columnas = $_GET["textc"];
	$ancho = $_GET["textd"];
?>
<table border="3">
	<?php
		for($i = 1 ; $i <= $filas ; $i++)
		{
	?>
		<tr>
	<?php
		for($j = 1 ; $j <= $columnas ; $j++)
		{			
	?>
		<td>
			<?php echo $i * $j;
		} ?>
		</td>
	<?php
		}
	?>
	</tr>
</table>

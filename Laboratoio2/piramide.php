<?php include("claselab.php"); 
$cadena = $_POST["txtC"];
$p = new Laboratorio2(0,"",0,0,0);
$p->set_cadena($cadena);
$p->piramide();
?>
<br><a href="index.php">Volver</a>
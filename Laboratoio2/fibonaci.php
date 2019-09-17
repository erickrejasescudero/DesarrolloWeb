<?php include("claselab.php"); 
$n = $_POST["txtN"];
$p = new Laboratorio2(0,"",0,0,0);
$p->set_n($n);
echo $p->calcularFibonaci();
?>
<br><a href="index.php">Volver</a>
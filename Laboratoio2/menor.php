<?php include("claselab.php"); 
$n1 = $_POST["txtN1"];
$n2 = $_POST["txtN2"];
$n3 = $_POST["txtN3"];

$p = new Laboratorio2(0,"",0,0,0);
$p-> set_a_b_c($n1,$n2,$n3);
echo $p-> calcularMenor();
?>
<br><a href="index.php">Volver</a>
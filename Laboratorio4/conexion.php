<?php 
$con =new mysqli("localhost", "root", "","bd_lab4");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>
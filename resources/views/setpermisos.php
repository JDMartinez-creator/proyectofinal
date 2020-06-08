<?php
require "conexion.php";
$response = "";
$url = "";
if ($tipo == 1) {
	$url = "INSERT INTO permisos_users VALUES(".$myid.",".$permiso_id.")";
	$response = "permiso añadido correctamente";
}
else
{
	$url = "DELETE FROM permisos_users where user_id = ".$myid." AND permisos_id = ".$permiso_id;
	$response = "permiso añadido correctamente";
}
$resBD = mysqli_query($mysqli,$url);
$valor = false;
while($file = mysqli_fetch_assoc($resBD))
{
	
}
echo $response;
mysqli_close($mysqli);
/**
?>


<?php
require "conexion.php";

$url = "SELECT * from permisos_users where user_id = ".$var." AND permisos_id = 4";


$resBD = mysqli_query($mysqli,$url);
$valor = false;
while($file = mysqli_fetch_assoc($resBD))
{
	$valor = true;
	
}
if($valor ===true) {echo true;}
else {echo false;}
mysqli_close($mysqli);
?>
<?php
require "conexion.php";

$url = "SELECT id,name from users where rol = 'autor'";

$resBD = mysqli_query($mysqli,$url);
$autores = "<br><select onchange='ls();show();' id='seleccionar'><option>-- Seleccionar autor --</option>";

while($file = mysqli_fetch_assoc($resBD))
{
$autores.= "<option value=".$file["id"].">".$file["name"]."</option>";
	
}
$autores.= "</select>";
echo $autores;
mysqli_close($mysqli);
?>
<?php
$mysqli = new mysqli("localhost","root","","unidad");
if(mysqli_connect_errno()){
	echo "no conect";
}
else{
	//echo "conectado";
}
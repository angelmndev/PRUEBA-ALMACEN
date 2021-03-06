<?php 
include("../../modelo/Marca.php");

$nombre = $_POST['nombre'];

echo $nombre;

$marca = new Marca('',$nombre);
$marca->InsertarMarca();

?>
<?php 
include("../../modelo/Marca.php");

$idMarca = $_POST['idMarca'];
$nombre = $_POST['nombre'];

$marca = new Marca($idMarca,$nombre);
$marca->ActualizarMarca();

?>
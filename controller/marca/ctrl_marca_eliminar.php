<?php 
include("../../modelo/Marca.php");

$idMarca = $_POST['idMarca'];


$marca = new Marca();
$marca->EliminarMarca($idMarca);

?>
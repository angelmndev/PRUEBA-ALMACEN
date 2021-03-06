<?php
include_once("../../modelo/Marca.php");
$idMarca = $_POST["idMarca"];

echo $idMarca;

$marca = new Marca();
$datos = $marca->ModificarMarca($idMarca);
$fila=$datos->fetch_assoc();
?>

<form>
  <div class="mb-3">
    <input type="text" class="form-control" value="<?=$fila['idMarca']?>" id="idMarca" aria-describedby="emailHelp">    
    <label for="exampleInputEmail1"  class="form-label">Nombre</label>
    <input type="text" class="form-control" value="<?=$fila['nombre']?>" id="nombre" aria-describedby="emailHelp">
  </div>  
</form>
<?php
include("../../modelo/Marca.php");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $marca = new Marca();
  $datos = $marca->ListarMarca();
  $numero = 1;
  while($fila = $datos->fetch_array(MYSQLI_ASSOC)):
  ?>
    <tr>
      <th scope="row"><?=$numero++?></th>
      <td><?=$fila['nombre']?></td>
      <td><button onClick="ModificarProducto(<?=$fila['idMarca']?>)">Editar</button><button onClick="EliminarMarca(<?=$fila['idMarca']?>)">Eliminar</button><td>
    </tr>
    <?php
    endwhile;
    ?>
  </tbody>
</table>
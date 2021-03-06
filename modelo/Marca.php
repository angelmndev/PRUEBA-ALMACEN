<?php
include("Conexion.php");
class Marca{
    private $idMarca;
    private $nombre;
  
    public function __construct($idMarca="",$nombre=""){
        $this->idMarca = $idMarca;
        $this->nombre = $nombre;
    }

    public function ListarMarca(){ 
        $con = new Conexion();      
        $sql = "SELECT * FROM marca";
        $data = $con->query($sql);

        return $data;
    }


    public function InsertarMarca(){ 
        $con = new Conexion();     
        $sql = "INSERT INTO marca (nombre) VALUES('".$this->nombre."')";
        $resultado = $con->query($sql);

        return $resultado;
    }

    public function ModificarMarca($idMarca){
        $con = new Conexion();
        $sql = "SELECT * FROM marca WHERE idMarca = '".$idMarca."'";
        $data = $con->query($sql);

        return $data;
    }

    public function ActualizarMarca(){
        $con = new Conexion();
        $sql = "UPDATE marca SET nombre = '".$this->nombre."' WHERE idMarca = '".$this->idMarca."'";
        $resultado = $con->query($sql);

        return $resultado;
    }


    public function EliminarMarca($idMarca){
        $con = new Conexion();
        $sql = "DELETE FROM marca WHERE idMarca = '".$idMarca."'";
        $resultado = $con->query($sql);

        return $resultado;
    }

}


?>
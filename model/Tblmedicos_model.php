<?php 

require_once 'model/Tblmedicos_model.php';
class Tblmedicos_model{

    private $bd;
    private $tblmedicos;

    public function __construct(){
        $this->bd=conexion::getConexion();
         $this->tbltblmedicos = array();
         $this->tbltipodocumento = array();
         $this->tblgenero = array();

    }


    public function insertarmedicos($dato){
        $numerodocumento = $dato['numerodocumento'];
        $idtipodoc = $dato['tipodoc'];
        $nombre = $dato['nombre'];
        $consulta = "INSERT INTO tblmedicos (numerodocumento,tipodoc,nombre) VALUES ('$numerodocumento','$idtipodoc','$nombre')";
        mysqli_query($this->bd,$consulta) or die ("error al insertar el medico");
    }

    public function consultatipodocumento(){
        $consulta=$this->bd->query("SELECT * FROM tbltipodocumento");
        while($fila=$consulta->fetch_assoc()){
            $this->tbltipodocumento[]=$fila;
        }
        return $this->tbltipodocumento;



    }
    public function consultamedicos(){
        $consultamedicos=$this->bd->query("SELECT * FROM tblmedicos ORDER BY nombre");
        while($fila=$consultamedicos->fetch_assoc()){
            $this->tblmedicos[]=$fila;
        }
        return $this->tblmedicos;



    }
    public function consultarPorId($id){
        $consulta = $this->bd->query("SELECT * FROM tblmedicos WHERE numerodocumento = $id;");
        $fila = $consulta->fetch_assoc();
        $this->tblmedicos[] = $fila;
        return $this->tblmedicos;
    }
    public function actualizarmedico($dato){
        $numerodocumento = $dato['numerodocumento'];
        $nombre = $dato['nombre'];
        $consulta = "UPDATE tblmedicos SET nombre = '$nombre' WHERE numerodocumento = $numerodocumento";
        mysqli_query($this->bd, $consulta) or die ("Error al actualizar los datos");
    }
    public function consultamedico(){
        $consulta=$this->bd->query("SELECT * FROM tblmedicos");
        while($fila=$consulta->fetch_assoc()){
            $this->tblmedicos[]=$fila;
        }
        return $this->tblmedicos;



    }


   
   


 
    
   
    
}








?>
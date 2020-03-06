<?php
class Tblhistorialmedico_model{
    private $bd;
    private $tblhistorial;

    public function __construct(){
        $this->bd=Conexion::getConexion();
        $this->tblhistorial=array();
    }

    

    public function insertarHistorial($dato){
        $paciente=$dato['paciente'];
        $medico=$dato['medico'];
        $observacion=$dato['observacion'];
        $fecha=$dato['fecha'];
        $consultaHistorial = "INSERT INTO tblhistorial (paciente, medico, observacion, fecha) VALUES ($paciente, $medico, '$observacion', '$fecha')";
        mysqli_query($this->bd, $consultaHistorial) or die ("Error al insertar los datos");
    }

    public function descartarHistorial($id){
        $consulta="DELETE FROM tblhistorial WHERE idhistoria=$id";
        mysqli_query($this->bd, $consulta) or die ("Error al eliminar los datos");
    }
}

?>
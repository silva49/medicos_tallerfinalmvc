<?php 

require_once 'model/Tblmedicos_model.php';

class Tblmedicos_controller{

    private $model_medicos;
    

    public function __construct(){

        $this->model_medicos=new Tblmedicos_model();
    }

    public function doctores(){
        
       $consultamedicos=$this->model_medicos->consultamedicos();
        require_once 'view/doctores.php';
    }
    public function medicos(){
       
        $id = $_REQUEST['id'];
        $consulta = $this->model_medicos->consultarPorId($id);
        $consultadocumentos = $this->model_medicos->consultatipodocumento();
        
    
       
        require_once 'view/doctores.php';
    }

    public function guardarmedicos(){
        $dato['numerodocumento']=$_POST['txtnumerodocumento'];
        $dato['tipodoc']=$_POST['seldocumento'];
        $dato['nombre']=$_POST["txtnombre"];
        $this->model_medicos->insertarmedicos($dato);
        $this->doctores();
    }
    public function modificardoc(){
       
        $id = $_REQUEST['id'];
        $consulta = $this->model_medicos->consultarPorId($id);
       
        require_once 'view/modificardoc.php';
    }
    public function guardarcambiosmedico(){
        $dato['numerodocumento']=$_POST['txtnumerodocumento'];
        $dato['nombre']=$_POST["txtnombre"];
        $this->model_medicos->actualizarmedico($dato);
        $this->doctores();
    }
    
  
   


   
   
   
}






?>
<?php
require_once 'model/Tblhistorialmedico_model.php';
require_once 'model/Tblpacientes_model.php';
require_once 'model/Tblmedicos_model.php';
require_once 'model/Tbltipodocumento_model.php';

    class Tblhistorialmedico_controller{
        private $model_historial;
        private $model_pacientes;
        private $model_doctores;
        private $model_documento;
        private $model_consultaph;

        public function __construct(){
            $this->model_historial = new Tblhistorialmedico_model();
            $this->model_pacientes = new Tblpacientes_model();
            $this->model_doctores = new Tblmedicos_model();
            $this->model_documento = new Tbltipodocumento_model();
        }

        public function historialmedico(){
           
            
           
            $consultaDocumento = $this->model_documento->consultarDocumento();
            require_once 'view/historialmedico.php';
        }

        public function guardarHistorial(){
            $dato['paciente']=$_POST["selpaciente"];
            $dato['medico']=$_POST["seldoctor"];
            $dato['observacion']=$_POST["txtobservaciones"];
            $dato['fecha']=$_POST["txtfecha"];
            $this->model_historial->insertarHistorial($dato);
            $this->historialmedico();
        }

        public function eliminarHistorial(){
            $id=$_REQUEST['id'];
            $this->model_historial->descartarHistorial($id);
            $this->historialmedico();
            
        }

       
    }
    
?>
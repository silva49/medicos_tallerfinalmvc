<?php
require_once 'conexion/Conexion.php';
require_once 'controller/index_controller.php';
require_once 'controller/Tblpacientes_controller.php';
require_once 'controller/Tblhistorialmedico_controller.php';
require_once 'controller/Tblmedicos_controller.php';
$controller =new Index_controller();
$controller_pacientes=new Tblpacientes_controller();
$controller_historialmedico=new Tblhistorialmedico_controller();
$controller_medicos=new Tblmedicos_controller();



if(!empty($_REQUEST['accion'])){

    $metodo = $_REQUEST['accion'];
    switch($metodo){
        case method_exists($controller,$metodo):
            $controller->index();
        break;

        case method_exists($controller_pacientes, $metodo):
        $controller_pacientes->$metodo();
        break;
        case method_exists($controller_pacientes, $metodo):
            $controller_pacientes->$metodo();
        break;
        case method_exists($controller_historialmedico, $metodo):
            $controller_historialmedico->$metodo();
        break;
        case method_exists($controller_medicos, $metodo):
            $controller_medicos->$metodo();
        break;
      
      
        default:
        $controller->index();

    }


}else{

    $controller->index();

}

?>
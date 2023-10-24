<?php
require_once './core/Controlador.php';
require_once './modelo/Auditoria.php';
require_once './assets/Helper.php';


class CtrlAuditoria extends Controlador {
    public function index(){
        # echo "Hola Auditoria";
        $obj = new Auditoria;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Auditoria',
            'datos'=>$data['data']
        ];

        $this->mostrar('auditoria/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Auditoria ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('auditoria/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Auditoria($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('auditoria/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $tabla = $_POST['tabla'];   
        $operacion = $_POST['operacion'];    
        $fecha = $_POST['fecha'];   
        $usuario = $_POST['usuario'];   
        $ip = $_POST['ip'];   
        $datos_new = $_POST['datos_new'];   
        $datos_old = $_POST['datos_old'];     
        $esNuevo = $_POST['esNuevo'];  


  

        $obj = new Auditoria ($id, $tabla,$operacion,$fecha,$usuario,$ip,
        $datos_new,$datos_old);

        switch ($esNuevo) {
            case 0: # Editar
                $data=$obj->actualizar();
                break;
            
            default: # Nuevo
                $data=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
}
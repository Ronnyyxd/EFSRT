<?php
require_once './core/Controlador.php';
require_once './modelo/Visitas_anexo04.php';

class CtrlVisitas_anexo04 extends Controlador {
    public function index(){
        # echo "Hola Visitas_anexo04";
        $obj = new Visitas_anexo04;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Visitas_anexo04',
            'datos'=>$data['data']
        ];

        $this->mostrar('visitas_anexo04/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Visitas_anexo04 ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('visitas_anexo04/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Visitas_anexo04($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('visitas_anexo04/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $numero = $_POST['numero'];   
        $fecha = $_POST['fecha'];    
        $tareas = $_POST['tareas'];   
        $porcentaje_avance = $_POST['porcentaje_avance'];   
        $idAnexo = $_POST['idAnexo'];      
        $esNuevo = $_POST['esNuevo'];  



        $obj = new Visitas_anexo04 ($id, $numero,$fecha,$tareas,$porcentaje_avance,$idAnexo
    );

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
<?php
require_once './core/Controlador.php';
require_once './modelo/Indicadores_evaluacion.php';

class CtrlIndicadores_evaluacion extends Controlador {
    public function index(){
        # echo "Hola Indicadores_evaluacion";
        $obj = new Indicadores_evaluacion;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'indicadores_evaluacion',
            'datos'=>$data['data']
        ];

        $this->mostrar('indicadores_evaluacion/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Indicadores_evaluacion ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('indicadores_evaluacion/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Indicadores_evaluacion($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('indicadores_evaluacion/formulario.php',$datos);
    }


    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $item = $_POST['item'];   
        $nombre = $_POST['nombre'];    
        $idTipo_indicador = $_POST['idTipo_indicador'];        
        $esNuevo = $_POST['esNuevo'];  


  

        $obj = new Indicadores_evaluacion ($id, $item,$nombre,$idTipo_indicador
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
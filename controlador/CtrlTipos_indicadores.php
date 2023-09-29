<?php
require_once './core/Controlador.php';
require_once './modelo/tipos_indicadores.php';

class CtrlTipos_indicadores extends Controlador {
    public function index(){
        # echo "Hola tipos_indicadores";
        $obj = new Tipos_indicadores;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'tipos_indicadores',
            'datos'=>$data['data']
        ];

        $this->mostrar('tipos_indicadores/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Tipos_indicadores ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('tipos_indicadores/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Tipos_indicadores($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('tipos_indicadores/formulario.php',$datos);
    }



    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $item = $_POST['item'];   
        $nombre = $_POST['nombre'];           
        $esNuevo = $_POST['esNuevo'];  



  

        $obj = new Tipos_indicadores ($id, $item,$nombre,$idTurno
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
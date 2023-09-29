<?php
require_once './core/Controlador.php';
require_once './modelo/Representantes.php';

class CtrlRepresentantes extends Controlador {
    public function index(){
        # echo "Hola Representantes";
        $obj = new Representantes;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Representantes',
            'datos'=>$data['data']
        ];

        $this->mostrar('representantes/mostrar.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Representantes ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('representantes/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Representantes($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('representantes/formulario.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $cargo = $_POST['cargo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Representantes ($id, $cargo );

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
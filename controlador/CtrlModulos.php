<?php
require_once './core/Controlador.php';
require_once './modelo/Modulos.php';

class CtrlModulos extends Controlador {
    public function index(){
        # echo "Hola Modulos";
        $obj = new Modulos;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Modulos',
            'datos'=>$data['data']
        ];

        $this->mostrar('modulos/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Modulos ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('modulos/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Modulos($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('modulos/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];   
        $horas = $_POST['horas'];    
        $creditos = $_POST['creditos'];   
        $numero = $_POST['numero'];   
        $idPlan = $_POST['idPlan'];      
        $esNuevo = $_POST['esNuevo'];  




        $obj = new Modulos ($id, $nombre,$horas,$creditos,$numero,$idPlan
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
<?php
require_once './core/Controlador.php';
require_once './modelo/programas_estudios.php';

class CtrlProgramas_estudios extends Controlador {
    public function index(){
        # echo "Hola programas_estudios";
        $obj = new Programas_estudios;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'programas_estudios',
            'datos'=>$data['data']
        ];

        $this->mostrar('programas_estudios/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Programas_estudios ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('programas_estudios/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Programas_estudios($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('programas_estudios/formulario.php',$datos);
    }


    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];   
        $logo = $_POST['logo'];    
        $idTurno = $_POST['idTurno'];        
        $esNuevo = $_POST['esNuevo'];  



  

        $obj = new Programas_estudios ($id, $nombre,$logo,$idTurno
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
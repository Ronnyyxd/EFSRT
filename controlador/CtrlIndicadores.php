<?php
require_once './core/Controlador.php';
require_once './modelo/Indicadores.php';

class CtrlIndicadores extends Controlador {
    public function index(){
        # echo "Hola Indicadores";
        $obj = new Indicadores;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Indicadores',
            'datos'=>$data['data']
        ];

        $this->mostrar('indicadores/mostrar.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Indicadores ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $this->mostrar('indicadores/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Indicadores($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('indicadores/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];   
        $descripcion = $_POST['descripcion'];    
        $idDetalleMatricula = $_POST['idDetalleMatricula'];   
        $promedio = $_POST['promedio'];   
        $notaRecuperacion = $_POST['notaRecuperacion'];      
        $esNuevo = $_POST['esNuevo'];  


  

        $obj = new Indicadores ($id, $nombre,$descripcion,$idDetalleMatricula,$promedio,$notaRecuperacion
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
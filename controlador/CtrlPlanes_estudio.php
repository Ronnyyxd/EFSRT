<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Planes_estudio.php';
require_once './assets/Helper.php';

class CtrlPlanes_estudio extends Controlador {
    public function index(){
        # echo "Hola Planes_estudio";
        $obj = new Planes_estudio;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Planes_estudio',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('planes_estudio/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Indicadores de Evaluacion',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Planes_estudio ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo plan de estudio',
            'contenido'=>$this->mostrar('planes_estudio/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Planes_estudio($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('planes_estudio/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar plan de estudio',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }


    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $anio = $_POST['anio'];   
        $activo = $_POST['activo'];    
        $idPrograma = $_POST['idPrograma'];        
        $esNuevo = $_POST['esNuevo'];  


  

        $obj = new Planes_estudio ($id, $anio,$activo,$idPrograma
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
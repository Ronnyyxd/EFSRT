<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Anexo04.php';

class CtrlAnexo04 extends Controlador {
    public function index(){
        # echo "Hola Anexo04";
        $obj = new Anexo04;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Anexo04',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('anexo04/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Anexo 04',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Anexo04 ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo Anexo 04',
            'contenido'=>$this->mostrar('anexo04/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Anexo04($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('cargos/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Cargo',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $fecha_inicio = $_POST['fecha_inicio'];   
        $fecha_fin = $_POST['fecha_fin'];    
        $problemas_detectados = $_POST['problemas_detectados'];   
        $observaciones = $_POST['observaciones'];   
        $idEstudiante = $_POST['idEstudiante'];   
        $idPrograma_estudios = $_POST['idPrograma_estudios'];   
        $idModulo = $_POST['idModulo'];     
        $idEmpresa  = $_POST['idEmpresa'];   
        $idDocente  = $_POST['idDocente'];
        $esNuevo = $_POST['esNuevo'];  

        $obj = new Anexo04 ($id, $fecha_inicio,$fecha_fin,$problemas_detectados,$observaciones,$idEstudiante,
        $idPrograma_estudios,$idModulo, $idEmpresa,$idDocente);

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
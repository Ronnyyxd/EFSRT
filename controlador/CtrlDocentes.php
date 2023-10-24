<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Docentes.php';
require_once './assets/Helper.php';

class CtrlDocentes extends Controlador {
    public function index(){
        # echo "Hola Docentes";
        $obj = new Docentes;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Docentes',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('docentes/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Docentes',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Docentes ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo Docente',
            'contenido'=>$this->mostrar('docentes/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Docentes($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('docentes/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Docente',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $idPrograma_estudios = $_POST['idPrograma_estudios'];
        $id = $_POST['id'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Docentes ($idPrograma_estudios,$id );

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
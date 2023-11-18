<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Estudiantes.php';
require_once './assets/Helper.php';


class CtrlEstudiantes extends Controlador {
    public function index(){
        # echo "Hola Estudiantes";
        $obj = new Estudiantes;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('estudiantes/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Estudiantes',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Estudiantes ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /*  $msg='';
            $datos= [
            'titulo'=>'Nuevo Estudiante',
            'contenido'=>$this->mostrar('estudiantes/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('estudiantes/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Estudiantes($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $this->mostrar('estudiantes/formulario.php',$datos); */
        $this->mostrar('estudiantes/formulario.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $idPrograma_estudios = $_POST['idPrograma_estudios'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Estudiantes ($id, $idPrograma_estudios );

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
<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Turnos.php';
require_once './assets/Helper.php';

class CtrlTurnos extends Controlador {
    public function index(){
        # echo "Hola Turnos";
        $obj = new Turnos;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Turnos',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('turnos/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Turnos',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Turnos ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo Turno',
            'contenido'=>$this->mostrar('turnos/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Turnos ($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('turno/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Turno',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $turno = $_POST['turno'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Turnos ($id, $turno);

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
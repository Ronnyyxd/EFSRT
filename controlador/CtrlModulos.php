<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Modulos.php';
require_once './assets/Helper.php';

class CtrlModulos extends Controlador {
    public function index(){
        # echo "Hola Modulos";
        $obj = new Modulos;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('modulos/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Modulos',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
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
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Modulo',
            'contenido'=>$this->mostrar('modulos/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('modulos/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Modulos($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('modulos/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Modulo',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
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
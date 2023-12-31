<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/tipos_indicadores.php';
require_once './assets/Helper.php';

class CtrlTipos_indicadores extends Controlador {
    public function index(){
        # echo "Hola tipos_indicadores";
        $obj = new Tipos_indicadores;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('tipos_indicadores/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Tipos de Indicadores',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Tipos_indicadores ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Tipos de Indicadores',
            'contenido'=>$this->mostrar('tipos_indicadores/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('tipos_indicadores/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Tipos_indicadores($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('tipos_indicadores/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Tipo de Indicador',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('tipos_indicadores/formulario.php',$datos);
    }



    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $item = $_POST['item'];   
        $nombre = $_POST['nombre'];           
         
        $esNuevo = $_POST['esNuevo'];  



  

        $obj = new Tipos_indicadores ($id, $item,$nombre
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
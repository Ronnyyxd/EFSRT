<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Indicadores_anexo.php';
require_once './assets/Helper.php';

class CtrlIndicadores_anexo extends Controlador {
    public function index(){
        # echo "Hola Indicadores_anexo";
        $obj = new Indicadores_anexo;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('indicadores_anexo/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Indicadores_anexo',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Indicadores_anexo ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nuevo Indicador de Anexo',
            'contenido'=>$this->mostrar('Indicadores_anexo/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('indicadores_anexo/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Indicadores_anexo($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('indicadores_anexo/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Indicador de Anexo',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('indicadores_anexo/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $idAnexo = $_POST['idAnexo'];   
        $idIndicador = $_POST['idIndicador'];    
        $calificacion = $_POST['calificacion'];

        $esNuevo = $_POST['esNuevo'];  


  

        $obj = new Indicadores_anexo ($id, $idAnexo,$idIndicador,$calificacion );

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
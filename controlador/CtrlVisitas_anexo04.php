<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Visitas_anexo04.php';
require_once './assets/Helper.php';

class CtrlVisitas_anexo04 extends Controlador {
    public function index(){
        # echo "Hola Visitas_anexo04";
        $obj = new Visitas_anexo04;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('visitas_anexo04/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Visitas',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    	
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Visitas_anexo04 ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nueva  Visita',
            'contenido'=>$this->mostrar('visitas_anexo04/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('visitas_anexo04/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Visitas_anexo04($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('visitas_anexo04/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Visita',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('visitas_anexo04/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $numero = $_POST['numero'];   
        $fecha = $_POST['fecha'];    
        $tareas = $_POST['tareas'];   
        $porcentaje_avance = $_POST['porcentaje_avance'];   
        $idAnexo = $_POST['idAnexo'];      
        $esNuevo = $_POST['esNuevo'];  



        $obj = new Visitas_anexo04 ($id, $numero,$fecha,$tareas,$porcentaje_avance,$idAnexo);

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

    public function getModulosXEstudiante(){
        require_once './modelo/Anexo04.php';
        $nombreEst = $this->getEstudiante();

        $obj = new Anexo04;
        $data = $obj->getAnexoXEstudiante($_GET['id']);
        //var_dump($data);exit;

        $datos = [
            
            'datos'=>$data['data']
        ];
        $home = $this->mostrar('visitas_anexo04/mostrarModulosXEstudiante.php',$datos,true);

        $datos= [
            'titulo'=>'Visitas para: '.$nombreEst,
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
        $this->mostrar('./plantilla/home.php',$datos);

    }
    private function getEstudiante(){
        require_once './modelo/Persona.php';
        $id = $_GET['id'];
        $obj = new Persona($id);
        $estudiante = $obj->editar()['data'][0];
        
        return $estudiante['nombres'] . ' '. $estudiante['apellidos'];
    }

    public function visitasXEstudiante(){

        $_SESSION['idAnexo']=  $_GET['idAnexo'];
        $nombreEst = $this->getEstudiante();

        $obj =  new Visitas_anexo04();

        $data = $obj->getPorEstudiante($_GET['id'],$_GET['idModulo']);

        //var_dump($data); exit;

        $idAnexo=$data['data'][0]['id'];
        
        $datos = [
            'idAnexo'=>$idAnexo,
            'datos'=>$data['data']
        ];
        $home = $this->mostrar('visitas_anexo04/mostrarXEstudiante.php',$datos,true);


        $datos= [
            'titulo'=>'Visitas para: '.$nombreEst.' - Módulo: '.$_GET['idModulo'],
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        
        
    }
}
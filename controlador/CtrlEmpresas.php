<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Empresas.php';
require_once './assets/Helper.php';

class CtrlEmpresas extends Controlador {
    public function index(){
        # echo "Hola Empresas";
        $obj = new Empresas;
        $data = $obj->getTodo();

        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('empresas/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Empresas',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    
  
    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Empresas ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /* $msg='';
        $datos= [
            'titulo'=>'Nueva Empresa',
            'contenido'=>$this->mostrar('empresas/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('empresas/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Empresas($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('empresas/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Empresa',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('empresas/formulario.php',$datos);
    }

    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $RazonSocial = $_POST['RazonSocial'];   
        $Direccion = $_POST['Direccion'];    
        $Telefono = $_POST['Telefono'];   
        $rubro = $_POST['rubro'];   
        $idRepresentante  = $_POST['idRepresentante'];   
        $RUC = $_POST['RUC'];   
        $esActiva = $_POST['esActiva'];     
        $esNuevo = $_POST['esNuevo'];  

        $obj = new Empresas ($id, $RazonSocial,$Direccion,$Telefono,$rubro,$idRepresentante ,
        $RUC,$esActiva);

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
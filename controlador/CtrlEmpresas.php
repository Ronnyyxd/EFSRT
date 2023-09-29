<?php
require_once './core/Controlador.php';
require_once './modelo/Empresas.php';

class CtrlEmpresas extends Controlador {
    public function index(){
        # echo "Hola Empresas";
        $obj = new Empresas;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Empresas',
            'datos'=>$data['data']
        ];

        $this->mostrar('Empresas/mostrar.php',$datos);
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
        $this->mostrar('Empresas/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Empresas($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $this->mostrar('Empresas/formulario.php',$datos);
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
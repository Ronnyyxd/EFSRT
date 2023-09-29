<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Anexo03.php';
require_once './modelo/Modulos.php';

class CtrlAnexo03 extends Controlador {
    public function index(){
        # echo "Hola Anexo03";
        $obj = new Anexo03;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [

            'titulo'=>'Anexo 03',
            'datos'=>$data['data'],
        ];

        $home = $this->mostrar('anexo03/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Anexo 03',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$NroModulo;
        $obj =new Anexo03 ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo Anexo 03',
            'contenido'=>$this->mostrar('anexo03/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Anexo03($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('anexo03/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Anexo 03',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $NroModulo = $_POST['NroModulo'];
        $Fecha_desde = $_POST['Fecha_desde'];   
        $Fecha_hasta = $_POST['Fecha_hasta'];    
        $horario = $_POST['horario'];   
        $observaciones = $_POST['observaciones'];   
        $pago_por = $_POST['pago_por'];   
        $movilidad = $_POST['movilidad'];   
        $otros = $_POST['otros'];   
        $solo_EFSRT = $_POST['solo_EFSRT'];   
        $idEmpresa  = $_POST['idEmpresa'];   
        $idEstudiante  = $_POST['idEstudiante'];   
        $idModulo = $_POST['idModulo'];   
        $detalle_otros = $_POST['detalle_otros'];   
        $esNuevo = $_POST['esNuevo'];

        $obj = new Anexo03 ($NroModulo, $Fecha_desde,$Fecha_hasta,$horario,$observaciones,$pago_por,$movilidad,$otros, $solo_EFSRT,$idEmpresa,$idEstudiante,$idModulo,$detalle_otros);

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
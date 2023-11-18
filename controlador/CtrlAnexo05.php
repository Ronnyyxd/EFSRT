<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Anexo05.php';
require_once './assets/Helper.php';

class CtrlAnexo05 extends Controlador {
    public function index(){
        # echo "Hola Anexo05";
        $obj = new Anexo05;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [
            'titulo'=>'Anexo05',
            'datos'=>$data['data']
        ];

        $home = $this->mostrar('anexo05/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Anexo 05',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Anexo05 ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        /* $datos= [
            'titulo'=>'Nuevo Anexo 05',
            'contenido'=>$this->mostrar('anexo05/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('anexo05/formulario.php');
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Anexo05($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $msg=$data['msg'];
        $datos = [
            'datos'=>$data['data'][0]
        ];
        /* $home = $this->mostrar('anexo05/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Anexo 05',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos); */
    $this->mostrar('anexo05/formulario.php',$datos);
    }


    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $idPrograma_estudios = $_POST['idPrograma_estudios'];   
        $idEstudiante = $_POST['idEstudiante'];    
        $idModulo = $_POST['idModulo'];   
        $fecha_inicio = $_POST['fecha_inicio'];   
        $fecha_fin = $_POST['fecha_fin'];   
        $Total_horas = $_POST['Total_horas'];   
        $idEmpresa = $_POST['idEmpresa'];   
        $lugar_oficina = $_POST['lugar_oficina'];   
        $lugar_laboratorio  = $_POST['lugar_laboratorio'];   
        $lugar_almacen  = $_POST['lugar_almacen'];   
        $lugar_campo = $_POST['lugar_campo'];   
        $lugar_otros = $_POST['lugar_otros'];   
        $horario = $_POST['horario'];
        $tareas = $_POST['tareas'];
        $total_puntaje = $_POST['total_puntaje'];
        $fecha_anexo = $_POST['fecha_anexo'];
        $lugar_anexo = $_POST['lugar_anexo'];
        $esNuevo = $_POST['esNuevo'];

        $obj = new Anexo05 ($id, $idPrograma_estudios,$idEstudiante,$idModulo,$fecha_inicio,$fecha_fin,$Total_horas, $idEmpresa, $lugar_oficina, $lugar_laboratorio
        ,$lugar_almacen,$lugar_campo,$lugar_otros,
         $horario,$tareas,$total_puntaje,$fecha_anexo,$lugar_anexo);

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
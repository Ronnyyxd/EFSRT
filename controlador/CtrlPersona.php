<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Persona.php';

class CtrlPersona extends Controlador {
    public function index(){

        $home = $this->mostrar('personas/login.php',null,true);

        $datos = [
            'contenido'=>$home
        ];
        $this->mostrar('plantilla/home.php',$datos);

    }
    public function login(){

        # echo "Validando datos";
        $login = $_POST['usuario'];
        $clave = $_POST['clave'];
        $obj = new Persona();
        $data = $obj->validar($login, $clave)['data'];

        # var_dump($data);exit;
        if (! is_null($data)){
            $_SESSION['id']=$data[0]['id'];
            $_SESSION['usuario']=$data[0]['usuario'];
            $_SESSION['nombre']=$data[0]['nombres'] . ' '. $data[0]['apellidos'];

            $_SESSION['menu']=$this->getMenu();

            # var_dump($_SESSION);exit;
        }
        header("Location: ?");


    }
    public function logout(){
        session_destroy();
        header("Location: ?");
    }
    public function getMenu(){
        return [
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
            'CtrlDocentes'=>'Docentes',
            'CtrlRepresentantes'=>'Representantes',
            'CtrlEmpresas'=>'Empresas',
            'CtrlEstudiantes'=>'Estudiantes',
            'CtrlIndicadores_anexo'=>'Indicadores_anexo',
            'CtrlIndicadores_evaluacion'=>'Indicadores_Evaluacion',
            'CtrlModulos'=>'Modulos',
            #'CtrlPersona'=>'Personas',
            'CtrlProgramas_Estudios'=>'Programas_Estudios',
            'CtrlTipos_indicadores'=>'Tipos_indicadores',
            'CtrlTurnos'=>'Turnos',
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
            'CtrlPlanes_estudio'=>'Planes de Estudio',
        ];
    }
}
        
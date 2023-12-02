<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Persona.php';
require_once './assets/Helper.php';

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
        $data = $obj->validar($login, $clave);
        
        # var_dump($data);exit;
       /*  if (! is_null($data)){
            $_SESSION['id']=$data[0]['id'];
            $_SESSION['usuario']=$data[0]['usuario'];
            $_SESSION['nombre']=$data[0]['nombres'] . ' '. $data[0]['apellidos'];

            $_SESSION['menu']=$this->getMenu();

            # var_dump($_SESSION);exit;
        }
        header("Location: ?");

 */

        if (is_null($data)){    #No existe el usuario
            header("Location: ?");
        } else {    #Mostrar las opciones del perfil disponibles
            
            $datos = [
            'data'=>$data
            ];
            $home = $this->mostrar('personas/opcionesPerfil.php',$datos,true);


            $datos= [
            'titulo'=>'Opciones de Perfil',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
                ];
            $this->mostrar('./plantilla/home.php',$datos);
        }

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
    
    public function accederModulo(){
        $idModulo = $_GET['idModulo'];
        $idPerfil = $_GET['idPerfil'];
        $idPersona = $_GET['id'];

        $obj = new Persona($idPersona);
        $data = $obj->editar()['data'];
        if(! is_null($data)){

            $_SESSION['id']=$data[0]['id'];
            $_SESSION['usuario']=$data[0]['usuario'];
            $_SESSION['cargo']=$data[0]['cargo'];
            $_SESSION['nombre']=$data[0]['nombres'] . ' '. $data[0]['cargo']. ' '. $data[0]['programa'];
        }


        $_SESSION['menu']= Helper::getMenu($idModulo,$idPerfil);

       # var_dump($_SESSION['menu']);exit;

        header("Location: ?");
    }
}
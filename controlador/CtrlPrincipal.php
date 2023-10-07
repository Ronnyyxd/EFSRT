<?php
session_start();

require_once './core/Controlador.php';
# require_once './modelo/Oficina.php';

class CtrlPrincipal extends Controlador {

    public function index(){
        #$_SESSION['menu'] = $this->getMenu();
        $datos= [
            'contenido'=>$this->mostrar('principal.php',null,true),
            #'menu'=> $_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
        # echo "Hola mundo";
        /* $datos = [
            'titulo'=>'Sexto Semestre',
            'usuario'=>'Walter',
            'menu'=>$this->getMenu()
        ];
        $this->mostrar('home.php',$datos); */
        

    }

    /* public function getMenu(){
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
            'CtrlPersonas'=>'Personas',
            'CtrlProgramas_Estudios'=>'Programas_Estudios',
            'CtrlTipos_indicadores'=>'Tipos_indicadores',
            'CtrlTurnos'=>'Turnos',
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
            'CtrlPlanes_estudio'=>'Planes de Estudio',
        ];
    } */
}
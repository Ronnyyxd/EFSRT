<?php
require_once './core/Controlador.php';
# require_once './modelo/Oficina.php';

class CtrlPrincipal extends Controlador {
    public function index(){
        # echo "Hola mundo";
        $datos = [
            'titulo'=>'Sexto Semestre',
            'usuario'=>'Jean-Paul Leonardo Cordova Accinelli',
            'menu'=>$this->getMenu()
        ];
        $this->mostrar('home.php',$datos);
        /* $obj = new Oficina();
        $data = $obj->mostrar();

        # var_dump($data);exit;

        $datos = [
            'menu'=>$this->getMenu(),
            'titulo'=>'Sistema IES.',
            'usuario'=>'Walter',
            'datos'=>$data['data']
        ];

        $this->mostrar('home.php',$datos); */

    }

    public function getMenu(){
        return [
            /* 'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados', */
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
            /* 'CtrlAuditoria'=>'Auditoria', */
            'CtrlDocentes'=>'Docentes',
            /* 'CtrlEncargado'=>'Encargado',Representantes
            'CtrlEntidad'=>'Entidad',Empresas
            'CtrlEstados'=>'Estados', */
            'CtrlEstudiantes'=>'Estudiantes',
            'CtrlIndicadores'=>'Indicadores',
            'CtrlIndicadores_evaluacion'=>'Indicadores_Evaluacion',
            'CtrlModulos'=>'Modulos',
            'CtrlPersonas'=>'Personas',
            'CtrlProgramas_Estudios'=>'Programas_Estudios',
            'CtrlTipos_indicadores'=>'Tipos_indicadores',
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
        ];
    }
}
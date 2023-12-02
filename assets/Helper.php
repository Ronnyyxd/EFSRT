<?php
abstract class Helper
{
    public static function verificarLogin(){
        if (!isset($_SESSION['usuario'])){
            header("Location: ?ctrl=CtrlPersona");
            exit();
        }
    }
    public static function getMenu($idM,$idP){

        switch ($idM) {
            case 1:   # Tramite Documentario
                switch ($idP) {
                    case 1:   #Administrador
                        $menu=self::getMenuTramiteAdmin();
                        break;
                    case 2:   #Docente
                        $menu=self::getMenuTramiteDocente();
                        break;
                    case 3:   #Estudiante
                        $menu=self::getMenuTramiteEstudiante();
                        break;
                    
                    
                    default:    #Evaluador
                        $menu=self::getMenuTramiteEvaluador();
                        break;
                }    
            
                break;
            case '2':   # Caja
                switch ($idP) {
                    case '1':   #Administrador
                        $menu=self::getMenuCajaAdmin();
                        break;
                    case '2':   #Docente
                        $menu=self::getMenuCajaDocente();
                        break;
                    case '3':   #Estudiante
                        $menu=self::getMenuCajaEstudiante();
                        break;
                    
                    
                    default:    #Evaluador
                        $menu=self::getMenuCajaEvaluador();
                        break;
                }   
                break;
            
            default:
                # code...
                break;
        }
        
        return $menu;
    }
    private static function getMenuTramiteAdmin(){
        return [
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
            'CtrlDocentes'=>'Docentes',
            /* 'CtrlRepresentantes'=>'Representantes', */
            /* 'CtrlEmpresas'=>'Empresas', */
            'CtrlEstudiantes'=>'Estudiantes',
            'CtrlIndicadores_anexo'=>'Indicadores_anexo',
            'CtrlIndicadores_evaluacion'=>'Indicadores_Evaluacion',
            'CtrlModulos'=>'Modulos',
            /* 'CtrlPersonas'=>'Personas', */
            'CtrlProgramas_Estudios'=>'Programas_Estudios',
            'CtrlTipos_indicadores'=>'Tipos_indicadores',
            'CtrlTurnos'=>'Turnos',
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
            'CtrlPlanes_estudio'=>'Programas de Estudio',
        ]; 
    }
    
    
    private static function getMenuTramiteDocente(){
        return [
            'CtrlVisitas_Anexo04'=>'Visitas',
            'CtrlAnexo03'=>'Documentacion Anexo 03',
            'CtrlAnexo04'=>'Documentacion Anexo 04',
            'CtrlAnexo05'=>'Documentacion Anexo 05',
            'CtrlEstudiante'=>' Mis Estudiantes',

           
        ]; 
    }
    private static function getMenuTramiteEstudiante(){
        return [
            'CtrlAnexo03'=>'Documentacion Anexo 03',
            'CtrlAnexo04'=>'Documentacion Anexo 04',
            'CtrlAnexo05'=>'Documentacion Anexo 05',
            'CtrlIndicadores_anexo1'=>'Visualizar Nota',
            
            'CtrlRepresentantes'=>'Editar Datos',
            
            
            
            
           
        ]; 
    }
    private static function getMenuTramiteEvaluador(){
        return [
            
            'CtrlIndicadores_evaluacion'=>'Indicadores de Evaluacion',
        ]; 
    }
    private static function getMenuCajaAdmin(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
           #  'CtrlFactorForma'=>'Factores de Forma',
            'CtrlCtaContable'=>'Cuentas Contables',
            'CtrlConceptoPago'=>'Conceptos de Pago',
            'CtrlEstudiante'=>'Estudiante',
        ]; 
    }
   
    private static function getMenuCajaDocente(){
        return [
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
            'CtrlIndicadores_anexo'=>'Visualizar Nota',
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
        ]; 
    }
    private static function getMenuCajaEstudiante(){
        return [
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
            'CtrlIndicadores_anexo_1'=>'Indicadores_anexo',
            
            
           
        ]; 
    }
    private static function getMenuCajaEvaluador(){
        return [
            'CtrlIndicadores_anexo'=>'Indicadores_anexo',
            'CtrlIndicadores_evaluacion'=>'Indicadores_Evaluacion',
        ]; 
    }

}
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
                    case 4:   #Administrativo
                        $menu=self::getMenuTramiteAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuTramiteVisitante();
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
                    case '4':   #Administrativo
                        $menu=self::getMenuCajaAdministrativo();
                        break;
                    
                    default:    #Visitante
                        $menu=self::getMenuCajaVisitante();
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
            'CtrlRepresentantes'=>'Representantes',
            'CtrlEmpresas'=>'Empresas',
            'CtrlEstudiantes'=>'Estudiantes',
            'CtrlIndicadores_anexo'=>'Indicadores_anexo',
            'CtrlIndicadores_evaluacion'=>'Indicadores_Evaluacion',
            'CtrlModulos'=>'Modulos',
            #'CtrlPersonas'=>'Personas',
            'CtrlProgramas_Estudios'=>'Programas_Estudios',
            'CtrlTipos_indicadores'=>'Tipos_indicadores',
            'CtrlTurnos'=>'Turnos',
            'CtrlVisitas_Anexo04'=>'Visitas_Anexo04',
            'CtrlPlanes_estudio'=>'Planes de Estudio',
        ]; 
    }
    private static function getMenuTramiteAdministrativo(){
        return [
           #  'CtrlFactorForma'=>'Factores de Forma',
            'CtrlCtaContable'=>'Cuentas Contables',
            'CtrlConceptoPago'=>'Conceptos de Pago',
            'CtrlEstudiante'=>'Estudiante',
        ]; 
    }
    private static function getMenuTramiteDocente(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
           
        ]; 
    }
    private static function getMenuTramiteEstudiante(){
        return [
            
            'CtrlEstado'=>'Estados',
           
        ]; 
    }
    private static function getMenuTramiteVisitante(){
        return [
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
    private static function getMenuCajaAdministrativo(){
        return [
            'CtrlAnexo03'=>'Anexo 03',
            'CtrlAnexo04'=>'Anexo 04',
            'CtrlAnexo05'=>'Anexo 05',
        ]; 
    }
    private static function getMenuCajaDocente(){
        return [
            'CtrlCargo'=>'Cargos',
            'CtrlEstado'=>'Estados',
           
        ]; 
    }
    private static function getMenuCajaEstudiante(){
        return [
            
            'CtrlEstado'=>'Estados',
           
        ]; 
    }
    private static function getMenuCajaVisitante(){
        return [
        ]; 
    }

}
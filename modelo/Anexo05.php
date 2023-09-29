<?php
require_once './core/Modelo.php';

class Anexo05 extends Modelo {
    private $id;
    private $idPrograma_estudios;
    private $idEstudiante;
    private $idModulo;
    private $fecha_inicio;
    private $fecha_fin;
    private $Total_horas;
    private $idEmpresa;
    private $lugar_oficina;
    private $lugar_laboratorio;
    private $lugar_almacen;
    private $lugar_campo;
    private $lugar_otros;
    private $lugar_taller;
    private $tareas;
    private $total_puntaje;
    private $fecha_anexo;
    private $lugar_anexo;
    private $_tabla='anexo_05';

    public function __construct($id=null,$idPrograma_estudios=null,$idEstudiante=null,$idModulo=null,
    $fecha_inicio=null,$fecha_fin=null,$Total_horas=null
    ,$idEmpresa=null,$lugar_oficina=null,$lugar_laboratorio=null,
    $lugar_almacen=null,$lugar_campo=null,$lugar_otros=null,$lugar_taller=null,$tareas=null,
    $total_puntaje=null,$fecha_anexo=null,$lugar_anexo=null){
        $this->id = $id;
        $this->idPrograma_estudios=$idPrograma_estudios;
        $this->idEstudiante=$idEstudiante;
        $this->idModulo=$idModulo;
        $this->fecha_inicio=$fecha_inicio;
        $this->fecha_fin=$fecha_fin;
        $this->Total_horas=$Total_horas;
        $this->idEmpresa=$idEmpresa;
        $this->lugar_oficina=$lugar_oficina;
        $this->lugar_laboratorio=$lugar_laboratorio;
        $this->lugar_almacen=$lugar_almacen;
        $this->lugar_campo=$lugar_campo;
        $this->lugar_otros=$lugar_otros;
        $this->lugar_taller=$lugar_taller;
        $this->tareas=$tareas;
        $this->total_puntaje=$total_puntaje;
        $this->fecha_anexo=$fecha_anexo;
        $this->lugar_anexo=$lugar_anexo;
        parent::__construct($this->_tabla);
    

    }
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        return $this->deleteById($this->id);
    }
    public function guardar(){
        $datos = [
            'id'=>$this->id,
            'idPrograma_estudios'=>"'$this->$idPrograma_estudios'",
            'idEstudiante'=>"'$this->$idEstudiante'",
            'idModulo'=>"'$this->$idModulo'",
            'fecha_inicio'=>"'$this->$fecha_inicio'",
            'fecha_fin'=>"'$this->$fecha_fin'",
            'Total_horas'=>"'$this->$Total_horas'",
            'idEmpresa'=>"'$this->$idEmpresa'",
            'lugar_oficina'=>"'$this->$lugar_oficina'",
            'lugar_laboratorio'=>"'$this->$lugar_laboratorio'",
            'lugar_almacen'=>"'$this->$lugar_almacen'",
            'lugar_campo'=>"'$this->$lugar_campo'",
            'lugar_otros'=>"'$this->$lugar_otros'",
            'lugar_taller'=>"'$this->$lugar_taller'",
            'tareas'=>"'$this->$tareas'",
            'total_puntaje'=>"'$this->$total_puntaje'",
            'fecha_anexo'=>"'$this->$fecha_anexo'",
            'lugar_anexo'=>"'$this->$lugar_anexo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'idPrograma_estudios'=>"'$this->$idPrograma_estudios'",
            'idEstudiante'=>"'$this->$idEstudiante'",
            'idModulo'=>"'$this->$idModulo'",
            'fecha_inicio'=>"'$this->$fecha_inicio'",
            'fecha_fin'=>"'$this->$fecha_fin'",
            'Total_horas'=>"'$this->$Total_horas'",
            'idEmpresa'=>"'$this->$idEmpresa'",
            'lugar_oficina'=>"'$this->$lugar_oficina'",
            'lugar_laboratorio'=>"'$this->$lugar_laboratorio'",
            'lugar_almacen'=>"'$this->$lugar_almacen'",
            'lugar_campo'=>"'$this->$lugar_campo'",
            'lugar_otros'=>"'$this->$lugar_otros'",
            'lugar_taller'=>"'$this->$lugar_taller'",
            'tareas'=>"'$this->$tareas'",
            'total_puntaje'=>"'$this->$total_puntaje'",
            'fecha_anexo'=>"'$this->$fecha_anexo'",
            'lugar_anexo'=>"'$this->$lugar_anexo'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
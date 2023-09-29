<?php
require_once './core/Modelo.php';

class Anexo04 extends Modelo {
    private $id;
    private $fecha_inicio;
    private $fecha_fin;
    private $problemas_detectados;
    private $observaciones;
    private $idEstudiante;
    private $idPrograma_estudios;
    private $idModulo;
    private $idEmpresa;
    private $idDocente;
    private $_tabla='anexo_04';

    public function __construct($id=null,$fecha_inicio=null,$fecha_fin=null,$problemas_detectados=null,$observaciones=null,$idEstudiante=null,$idPrograma_estudios=null
    ,$idModulo=null,$idEmpresa=null,$idDocente=null){
        $this->id = $id;
        $this->fecha_inicio=$fecha_inicio;
        $this->fecha_fin=$fecha_fin;
        $this->problemas_detectados=$problemas_detectados;
        $this->observaciones=$observaciones;
        $this->idEstudiante=$idEstudiante;
        $this->idPrograma_estudios=$idPrograma_estudios;
        $this->idModulo=$idModulo;
        $this->idEmpresa=$idEmpresa;
        $this->idDocente=$idDocente;

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
            'fecha_inicio'=>"'$this->$fecha_inicio'",
            'fecha_fin'=>"'$this->$fecha_fin'",
            'problemas_detectados'=>"'$this->$problemas_detectados'",
            'observaciones'=>"'$this->$observaciones'",
            'idEstudiante'=>"'$this->$idEstudiante'",
            'idPrograma_estudios'=>"'$this->$idPrograma_estudios'",
            'idModulo'=>"'$this->$idModulo'",
            'idEmpresa'=>"'$this->$idEmpresa'",
            'idDocente'=>"'$this->$idDocente'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'fecha_inicio'=>"'$this->$fecha_inicio'",
            'fecha_fin'=>"'$this->$fecha_fin'",
            'problemas_detectados'=>"'$this->$problemas_detectados'",
            'observaciones'=>"'$this->$observaciones'",
            'idEstudiante'=>"'$this->$idEstudiante'",
            'idPrograma_estudios'=>"'$this->$idPrograma_estudios'",
            'idModulo'=>"'$this->$idModulo'",
            'idEmpresa'=>"'$this->$idEmpresa'",
            'idDocente'=>"'$this->$idDocente'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
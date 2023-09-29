<?php
require_once './core/Modelo.php';

class Estudiantes extends Modelo {
    private $id;
    private $idPrograma_estudios;
    private $_tabla='estudiantes';

    public function __construct($id=null,$idPrograma_estudios=null){
        $this->id = $id;
        $this->idPrograma_estudios=$idPrograma_estudios;
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
            'idPrograma_estudios'=>"'$this->idPrograma_estudios'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'idPrograma_estudios'=>"'$this->idPrograma_estudios'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
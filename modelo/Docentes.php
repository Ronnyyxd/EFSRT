<?php
require_once './core/Modelo.php';

class Docentes extends Modelo {
    private $idPrograma_estudios;
    private $id;
    private $_tabla='docentes';

    public function __construct($id=null,$idPrograma_estudios=null){
        $this->idPrograma_estudios=$idPrograma_estudios;
        $this->id = $id;
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
            'idPrograma_estudios'=>"'$this->idPrograma_estudios'",
            'id'=>$this->id,
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'idPrograma_estudios'=>"'$this->idPrograma_estudios'",
            'id'=>$this->id,
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
<?php
require_once './core/Modelo.php';

class Representantes extends Modelo {
    private $id;
    private $cargo;
    private $_tabla='representantes';

    public function __construct($id=null,$cargo=null){
        $this->id = $id;
        $this->cargo=$cargo;
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
            'cargo'=>"'$this->cargo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'cargo'=>"'$this->cargo'",
        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
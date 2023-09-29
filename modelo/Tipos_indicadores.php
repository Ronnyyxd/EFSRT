<?php
require_once './core/Modelo.php';

class Tipos_indicadores extends Modelo {
    private $id;
    private $item;
    private $nombre;

    private $_tabla='tipos_indicadores';



    public function __construct($id=null,$item=null,$nombre=null,$idTurno=null){
        $this->id = $id;
        $this->item=$item;
        $this->nombre=$nombre;
        $this->idTurno=$idTurno;



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
            'item'=>"'$this->$item'",
            'nombre'=>"'$this->$nombre'",
            'idTurno'=>"'$this->$idTurno'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'item'=>"'$this->$item'",
            'nombre'=>"'$this->$nombre'",
            'idTurno'=>"'$this->$idTurno'",


        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
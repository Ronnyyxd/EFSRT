<?php
require_once './core/Modelo.php';

class Indicadores_evaluacion extends Modelo {
    private $id;
    private $item;
    private $nombre;
    private $idTipo_indicador;
    private $datos_old;

    private $_tabla='indicadores_evaluacion';

    public function __construct($id=null,$item=null,$nombre=null,$idTipo_indicador=null){
        $this->id = $id;
        $this->item=$item;
        $this->nombre=$nombre;
        $this->idTipo_indicador=$idTipo_indicador;



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
            'item'=>"'$this->item'",
            'nombre'=>"'$this->nombre'",
            'idTipo_indicador'=>"'$this->idTipo_indicador'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'item'=>"'$this->item'",
            'nombre'=>"'$this->nombre'",
            'idTipo_indicador'=>"'$this->idTipo_indicador'",


        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
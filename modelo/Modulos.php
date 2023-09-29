<?php
require_once './core/Modelo.php';

class Modulos extends Modelo {
    private $id;
    private $nombre;
    private $horas;
    private $creditos;
    private $numero;
    private $idPlan;


    private $_tabla='modulos';

    public function __construct($id=null,$nombre=null,$horas=null,$creditos=null,$numero=null,$idPlan=null,
){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->horas=$horas;
        $this->creditos=$creditos;
        $this->numero=$numero;
        $this->idPlan=$idPlan;




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
            'nombre'=>"'$this->nombre'",
            'horas'=>"'$this->horas'",
            'creditos'=>"'$this->creditos'",
            'numero'=>"'$this->numero'",
            'idPlan'=>"'$this->idPlan'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'nombre'=>"'$this->nombre'",
            'horas'=>"'$this->horas'",
            'creditos'=>"'$this->creditos'",
            'numero'=>"'$this->numero'",
            'idPlan'=>"'$this->idPlan'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
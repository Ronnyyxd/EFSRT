<?php
require_once './core/Modelo.php';

class Programas_estudios extends Modelo {
    private $id;
    private $nombre;
    private $logo;
    private $idTurno;
    private $datos_old;

    private $_tabla='programas_estudios';



    public function __construct($id=null,$nombre=null,$logo=null,$idTurno=null){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->logo=$logo;
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
        $datos = $this->getDatos();
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = $this->getDatos();
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
    private function getDatos(){
        return   [
            'id'=>$this->id,
            'nombre'=>"'$this->nombre'",
            'logo'=>"'$this->logo'",
            'idTurno'=>"'$this->idTurno'",
        ];
    }
}
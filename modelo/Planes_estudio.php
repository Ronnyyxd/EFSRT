<?php
require_once './core/Modelo.php';

class Planes_estudio extends Modelo {
    private $id;
    private $anio;
    private $activo;
    private $idPrograma;
    private $datos_old;

    private $_tabla='planes_estudio';

    public function __construct($id=null,$anio=null,$activo=null,$idPrograma=null){
        $this->id = $id;
        $this->anio=$anio;
        $this->activo=$activo;
        $this->idPrograma=$idPrograma;



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
            'anio'=>"'$this->anio'",
            'activo'=>"'$this->activo'",
            'idPrograma'=>"'$this->idPrograma'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'anio'=>"'$this->anio'",
            'activo'=>"'$this->activo'",
            'idPrograma'=>"'$this->idPrograma'",


        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
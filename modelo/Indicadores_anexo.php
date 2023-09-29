<?php
require_once './core/Modelo.php';

class Indicadores_anexo extends Modelo {
    private $id;
    private $idAnexo;
    private $idIndicador;
    private $calificacion;


    private $_tabla='indicadores_anexo';

    public function __construct($id=null,$idAnexo=null,$idIndicador=null,$calificacion=null){
        $this->id = $id;
        $this->idAnexo=$idAnexo;
        $this->idIndicador=$idIndicador;
        $this->calificacion=$calificacion;

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
            'idAnexo'=>"'$this->idAnexo'",
            'idIndicador'=>"'$this->idIndicador'",
            'calificacion'=>"'$this->calificacion'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'idAnexo'=>"'$this->$idAnexo'",
            'idIndicador'=>"'$this->idIndicador'",
            'calificacion'=>"'$this->calificacion'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
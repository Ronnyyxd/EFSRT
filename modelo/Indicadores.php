<?php
require_once './core/Modelo.php';

class Indicadores extends Modelo {
    private $id;
    private $nombre;
    private $descripcion;
    private $idDetalleMatricula;
    private $promedio;
    private $notaRecuperacion;


    private $_tabla='indicadores';

    public function __construct($id=null,$nombre=null,$descripcion=null,$idDetalleMatricula=null,$promedio=null,$notaRecuperacion=null,
){
        $this->id = $id;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->idDetalleMatricula=$idDetalleMatricula;
        $this->promedio=$promedio;
        $this->notaRecuperacion=$notaRecuperacion;




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
            'nombre'=>"'$this->$nombre'",
            'descripcion'=>"'$this->$descripcion'",
            'idDetalleMatricula'=>"'$this->$idDetalleMatricula'",
            'promedio'=>"'$this->$promedio'",
            'notaRecuperacion'=>"'$this->$notaRecuperacion'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'nombre'=>"'$this->$nombre'",
            'descripcion'=>"'$this->$descripcion'",
            'idDetalleMatricula'=>"'$this->$idDetalleMatricula'",
            'promedio'=>"'$this->$promedio'",
            'notaRecuperacion'=>"'$this->$notaRecuperacion'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
<?php
require_once './core/Modelo.php';

class Visitas_anexo04 extends Modelo {
    private $id;
    private $numero;
    private $fecha;
    private $tareas;
    private $porcentaje_avance;
    private $idAnexo;

    private $_tabla='visitas_anexo04';

    public function __construct($id=null,$numero=null,$fecha=null,$tareas=null,$porcentaje_avance=null,$idAnexo=null,
){
        $this->id = $id;
        $this->numero=$numero;
        $this->fecha=$fecha;
        $this->tareas=$tareas;
        $this->porcentaje_avance=$porcentaje_avance;
        $this->idAnexo=$idAnexo;




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
            'numero'=>"'$this->numero'",
            'fecha'=>"'$this->fecha'",
            'tareas'=>"'$this->tareas'",
            'porcentaje_avance'=>"'$this->porcentaje_avance'",
            'idAnexo'=>"'$this->idAnexo'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'numero'=>"'$this->numero'",
            'fecha'=>"'$this->fecha'",
            'tareas'=>"'$this->tareas'",
            'porcentaje_avance'=>"'$this->porcentaje_avance'",
            'idAnexo'=>"'$this->idAnexo'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
    public function getPorEstudiante ($id,$idM){
        $sql = "Select * from v_visitasA4 where idEstudiante=$id and idModulo=$idM";
        $this->setSql($sql);
        return $this->ejecutarSql();
    }
}
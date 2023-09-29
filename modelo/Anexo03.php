<?php
require_once './core/Modelo.php';

class Anexo03 extends Modelo {
    private $NroModulo;
    private $Fecha_desde;
    private $Fecha_hasta;
    private $horario;
    private $observaciones;
    private $pago_por;
    private $movilidad;
    private $otros;
    private $solo_EFSRT;
    private $idEmpresa;
    private $idEstudiante;
    private $idModulo;
    private $detalle_otros;
    private $_tabla='anexo_03';

    public function __construct($NroModulo=null,$Fecha_desde=null,$Fecha_hasta=null,$horario=null,$observaciones=null,$pago_por=null,$movilidad=null
    ,$otros=null,$solo_EFSRT=null,$idEmpresa=null,$idEstudiante=null,$idModulo=null,$detalle_otros=null){
        $this->NroModulo = $NroModulo;
        $this->Fecha_desde=$Fecha_desde;
        $this->Fecha_hasta=$Fecha_hasta;
        $this->horario=$horario;
        $this->observaciones=$observaciones;
        $this->pago_por=$pago_por;
        $this->movilidad=$movilidad;
        $this->otros=$otros;
        $this->solo_EFSRT=$solo_EFSRT;
        $this->idEmpresa=$idEmpresa;
        $this->idEstudiante=$idEstudiante;
        $this->idModulo=$idModulo;
        $this->detalle_otros=$detalle_otros;
        parent::__construct($this->_tabla);
    }
    public function getTodo(){
        return $this->getAll();
    }
    public function eliminar(){
        return $this->deleteById($this->NroModulo);
    }
    public function guardar(){
        $datos = [
            'NroModulo'=>$this->NroModulo,
            'Fecha_desde'=>"'$this->Fecha_desde'",
            'Fecha_hasta'=>"'$this->Fecha_hasta'",
            'horario'=>"'$this->horario'",
            'observaciones'=>"'$this->observaciones'",
            'pago_por'=>"'$this->pago_por'",
            'movilidad'=>"'$this->movilidad'",
            'otros'=>"'$this->otros'",
            'solo_EFSRT'=>"'$this->solo_EFSRT'",
            'idEmpresa'=>"'$this->idEmpresa'",
            'idEstudiante'=>"'$this->idEstudiante'",
            'idModulo'=>"'$this->idModulo'",
            'detalle_otros'=>"'$this->detalle_otros'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getBy('NroModulo',$this->NroModulo);
    }
    public function actualizar(){
        $datos = [
            'NroModulo'=>$this->NroModulo,
            'Fecha_desde'=>"'$this->Fecha_desde'",
            'Fecha_hasta'=>"'$this->Fecha_hasta'",
            'horario'=>"'$this->horario'",
            'observaciones'=>"'$this->observaciones'",
            'pago_por'=>"'$this->pago_por'",
            'movilidad'=>"'$this->movilidad'",
            'otros'=>"'$this->otros'",
            'solo_EFSRT'=>"'$this->solo_EFSRT'",
            'idEmpresa'=>"'$this->idEmpresa'",
            'idEstudiante'=>"'$this->idEstudiante'",
            'idModulo'=>"'$this->idModulo'",
            'detalle_otros'=>"'$this->detalle_otros'",
        ];
        $wh = "NroModulo=$this->NroModulo";
        return $this->update($wh,$datos);
    }
}
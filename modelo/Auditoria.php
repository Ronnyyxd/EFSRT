<?php
require_once './core/Modelo.php';

class Auditoria extends Modelo {
    private $id;
    private $tabla;
    private $operacion;
    private $fecha;
    private $usuario;
    private $ip;
    private $datos_new;
    private $datos_old;

    private $_tabla='auditoria';

    public function __construct($id=null,$tabla=null,$operacion=null,$fecha=null,$usuario=null,$ip=null,$datos_new=null
    ,$datos_old=null){
        $this->id = $id;
        $this->tabla=$tabla;
        $this->operacion=$operacion;
        $this->fecha=$fecha;
        $this->usuario=$usuario;
        $this->ip=$ip;
        $this->datos_new=$datos_new;
        $this->datos_old=$datos_old;


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
            'tabla'=>"'$this->$tabla'",
            'operacion'=>"'$this->$operacion'",
            'fecha'=>"'$this->$fecha'",
            'usuario'=>"'$this->$usuario'",
            'ip'=>"'$this->$ip'",
            'datos_new'=>"'$this->$datos_new'",
            'datos_old'=>"'$this->$datos_old'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'tabla'=>"'$this->$tabla'",
            'operacion'=>"'$this->$operacion'",
            'fecha'=>"'$this->$fecha'",
            'usuario'=>"'$this->$usuario'",
            'ip'=>"'$this->$ip'",
            'datos_new'=>"'$this->$datos_new'",
            'datos_old'=>"'$this->$datos_old'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
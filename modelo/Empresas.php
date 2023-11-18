<?php
require_once './core/Modelo.php';

class Empresas extends Modelo {
    private $id;
    private $RazonSocial;
    private $Direccion;
    private $Telefono;
    private $rubro;
    private $idRepresentante;
    private $RUC;
    private $esActiva;
    
    private $_tabla='empresas';


    public function __construct($id=null,$RazonSocial=null,$Direccion=null,$Telefono=null,$rubro=null,$idRepresentante=null,$RUC=null
    ,$esActiva=null){
        $this->id = $id;
        $this->RazonSocial=$RazonSocial;
        $this->Direccion=$Direccion;
        $this->Telefono=$Telefono;
        $this->rubro=$rubro;
        $this->idRepresentante=$idRepresentante;
        $this->RUC=$RUC;
        $this->esActiva=$esActiva;
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
            'RazonSocial'=>"'$this->RazonSocial'",
            'Direccion'=>"'$this->Direccion'",
            'Telefono'=>"'$this->Telefono'",
            'rubro'=>"'$this->rubro'",
            'idRepresentante'=>"'$this->idRepresentante'",
            'RUC'=>"'$this->RUC'",
            'esActiva'=>"'$this->esActiva'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'RazonSocial'=>"'$this->RazonSocial'",
            'Direccion'=>"'$this->Direccion'",
            'Telefono'=>"'$this->Telefono'",
            'rubro'=>"'$this->rubro'",
            'idRepresentante'=>"'$this->idRepresentante'",
            'RUC'=>"'$this->RUC'",
            'esActiva'=>"'$this->esActiva'",
 

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
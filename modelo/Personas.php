<?php
require_once './core/Modelo.php';

class Personas extends Modelo {
    private $id;
    private $nombres;
    private $apellidos;
    private $dni;
    private $correo;
    private $direccion;
    private $Telefono;
    private $password;
    private $usuario;
    private $fechaNacimiento;
    private $_tabla='personas';


    public function __construct($id=null,$nombres=null,$apellidos=null,$dni=null,$correo=null,$direccion=null,$Telefono=null
    ,$password=null,$usuario=null,$fechaNacimiento=null){
        $this->id = $id;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->dni=$dni;
        $this->correo=$correo;
        $this->direccion=$direccion;
        $this->Telefono=$Telefono;
        $this->password=$password;
        $this->usuario=$usuario;
        $this->fechaNacimiento=$fechaNacimiento;

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
            'nombres'=>"'$this->nombres'",
            'apellidos'=>"'$this->apellidos'",
            'dni'=>"'$this->dni'",
            'correo'=>"'$this->correo'",
            'direccion'=>"'$this->direccion'",
            'Telefono'=>"'$this->Telefono'",
            'password'=>"'$this->password'",
            'usuario'=>"'$this->usuario'",
            'fechaNacimiento'=>"'$this->fechaNacimiento'",
        ];
        return $this->insert($datos);
    }
    public function editar(){
        return $this->getById($this->id);
    }
    public function actualizar(){
        $datos = [
            'id'=>$this->id,
            'nombres'=>"'$this->nombres'",
            'apellidos'=>"'$this->apellidos'",
            'dni'=>"'$this->dni'",
            'correo'=>"'$this->correo'",
            'direccion'=>"'$this->direccion'",
            'Telefono'=>"'$this->Telefono'",
            'password'=>"'$this->password'",
            'usuario'=>"'$this->usuario'",
            'fechaNacimiento'=>"'$this->fechaNacimiento'",

        ];
        $wh = "id=$this->id";
        return $this->update($wh,$datos);
    }
}
<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Personas.php';

class CtrlPersonas extends Controlador {
    public function index(){
        # echo "Hola Personas";
        $obj = new Personas;
        $data = $obj->getTodo();

        # var_dump($data);exit;

        $datos = [

            'datos'=>$data['data']
        ];

        $home = $this->mostrar('personas/mostrar.php',$datos,true);

        $datos= [
            'titulo'=>'Personas',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);

    }

    public function eliminar(){
        $id = $_GET['id'];
        # echo "eliminando: ".$id;
        $obj =new Personas ($id);
        $obj->eliminar();

        $this->index();
    }
    public function nuevo(){
        # echo "Agregando..";
        $datos= [
            'titulo'=>'Nuevo Persona',
            'contenido'=>$this->mostrar('personas/formulario.php',null,true),
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    }
    public function editar(){
        $id = $_GET['id'];
        # echo "Editando: ".$id;
        $obj = new Personas($id);
        $data = $obj->editar();
        # var_dump($data);exit;
        $datos = [
            'datos'=>$data['data'][0]
        ];
        $home = $this->mostrar('personas/formulario.php',$datos,true);

         $datos= [
            'titulo'=>'Editar Personas',
            'contenido'=>$home,
            'menu'=>$_SESSION['menu']
        ];
    $this->mostrar('./plantilla/home.php',$datos);
    


    }
    public function guardar(){
        # echo "Guardando..";
        # var_dump($_POST);
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];   
        $apellidos = $_POST['apellidos'];    
        $dni = $_POST['dni'];   
        $correo = $_POST['correo'];   
        $direccion = $_POST['direccion'];   
        $Telefono = $_POST['Telefono'];   
        $password = $_POST['password'];     
        $usuario  = $_POST['usuario'];   
        $fechaNacimiento  = $_POST['fechaNacimiento'];
        $esNuevo = $_POST['esNuevo'];  

        $obj = new Personas ($id, $nombres,$apellidos,$dni,$correo,$direccion,
        $Telefono,$password, $usuario,$fechaNacimiento);

        switch ($esNuevo) {
            case 0: # Editar
                $data=$obj->actualizar();
                break;
            
            default: # Nuevo
                $data=$obj->guardar();
                break;
        }

        
        # var_dump($data);exit;
        $this->index();

    }
}
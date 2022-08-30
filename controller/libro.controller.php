<?php
require_once 'model/libro.php';

class libroController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new libro();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/libro/libro.php';
    }

    public function Crud(){
        $libro = new libro();
        
        if(isset($_REQUEST['id'])){
            $libro = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/libro/libro-editar.php';
        
    }

    public function Guardar(){
        $libro = new libro();
        
        $libro->id = $_REQUEST['id'];
        $libro->ISBN = $_REQUEST['ISBN'];
        $libro->Titulo = $_REQUEST['Titulo'];
        $libro->Autor = $_REQUEST['Autor'];
        $libro->Genero = $_REQUEST['Genero'];  
        $libro->Fecha_publicacion = $_REQUEST['Fecha_publicacion'];    
        $libro->Resumen = $_REQUEST['Resumen']; 
      

        $libro->id > 0 
            ? $this->model->Actualizar($libro)
            : $this->model->Registrar($libro);
        
        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }


}


?>
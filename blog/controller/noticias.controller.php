<?php
require_once 'model/noticias.php';

class NoticiasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new noticias();
    }
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/extra/header-table.php';
        require_once 'view/navbar.php';
        require_once 'view/Noticias/Noticias.php';
        require_once 'view/extra/footer-table.php';
        require_once 'view/footer.php';
    }
    public function Form(){
        $alm = new noticias();
        if(isset($_REQUEST['Id'])){ $alm = $this->model->Obtener($_REQUEST['Id']); }
        require_once 'model/extra/listados.php';
        require_once 'view/header.php';
        require_once 'view/extra/header-form.php';
        require_once 'view/navbar.php';
        require_once 'view/Noticias/Noticias_form.php';
        require_once 'view/footer.php';
    }
    public function Guardar(){
        $alm = new noticias();
        $alm->Id = $_REQUEST['Id'];
        $alm->Titulo = $_REQUEST['Titulo'];
        $alm->Contenido = $_REQUEST['Contenido'];
        $alm->Tipo = $_REQUEST['Tipo'];

        $alm->Id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: ?c=Noticias');
    }
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['Id']);
        header('Location: ?c=Noticias');
    }
}
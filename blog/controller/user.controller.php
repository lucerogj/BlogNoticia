<?php
require_once 'model/user.php';
require_once 'model/noticias.php';
class UserController{
    
    private $model;private $model1;
    
    public function __CONSTRUCT(){
        $this->model = new User();
        $this->model1 = new Noticias();
    }
    
    public function Index(){
        $error="";
        require_once 'view/header.php';
        require_once 'view/navbar.php';
        require_once 'view/user/user.php';
        require_once 'view/footer.php';
    }
  
}
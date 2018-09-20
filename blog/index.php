<?php
session_start();
require_once 'model/database.php';
$controller = 'user';
    // Todo esta lógica hara el papel de un FrontController
    if(!isset($_REQUEST['c'])){
   // Por defecto a no traer controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Index();    
    }else{
           // para el resto de modulos que no son usuario, debe estar logeado
                $controller = strtolower($_REQUEST['c']);
                $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                call_user_func( array( $controller, $accion ) );
        
        
    }
<?php 
    class Login extends Controller {
        function __construct(){
            parent::__construct();          
          //  $this->view->render('main/index');
            // este objeto view es el del controlador base views     
            // cokies para recordar usuario
          //    https://www.forosdelweb.com/f18/boton-recordar-con-cookies-554157/
        }

        function render(){
            $mensaje_error ="";
            $this->view->activa= "Login";
            $this->view->mensaje=$mensaje_error;
            $this->view->render('login/index');     
        }
    } // fin de clase
<?php 
session_start();
    class Login extends Controller {
      public string $mensaje_error ="";

        function __construct(){
            parent::__construct();    

            if(isset( $_POST["user"]) && isset($_POST["pass"]) )
            { // Obtiene el model para traer usuario si existe en la bd
              // valida que no envie datos vacios 
              $nombre = $_POST["user"];
              $passw= $_POST["pass"];
             
              
              if(strlen(trim($nombre))>0 &&  strlen( trim($passw))>0 ){
              
                 $mensaje_error ="";
              }
              else {
                 $mensaje_error="escribe usuarios minimo 3 caracteres  y passsword minimo de 6 caracteres";
              }
              
            }

            // este objeto view es el del controlador base views     
            // cokies para recordar usuario
          //    https://www.forosdelweb.com/f18/boton-recordar-con-cookies-554157/
        }

        function render(){
          if(!isset($_SESSION['usuario']) ){ 
            
          
            $this->view->activa= "Login";
            $this->view->mensaje=$this->mensaje_error;
            $this->view->render('login/index');
          }     
          else {
            header('Location: '.constant("URL_BASE") );
          }
        }
    } // fin de clase
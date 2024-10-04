<?php
   class Dashboard extends Controller{
    function __construct(){
            parent::__construct();

    }
    function render(){
        //   $filename = "libros.xls";
        //   $filename= "cancion.xls";
    // header("Content-Type: application/vnd.ms-excel"); 
    // header("Content-Disposition: attachment; filename=".$filename);
    // header("Pragma: no-cache");
   // header("Expires: 0");
     
           date_default_timezone_set('America/Mexico_City');
           $fecha1=date('Y-m-d');
   
           $fecha2=$fecha1;
   
           $fecha1=$fecha1.' 00:00:00';
           $fecha2= $fecha2.' 23:59:59';
   
        //   $datos =$this->model->getAll($fecha1, $fecha2);
   
          // print_r($datos);
           $this->view->titulopage="HOME";
         //  $this->view->dt=$datos;
           $this->view->render('home/index');           
       }   
    } 
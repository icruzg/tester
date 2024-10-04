<?php
class Views{
      
    function __construct(){
      //  echo "<p>vista base <p>";
        
    }
    function render($nombre){
        require 'views/'.$nombre.'.php';
    }
}

//https://www.youtube.com/watch?v=fmzMpET7PbA

?>
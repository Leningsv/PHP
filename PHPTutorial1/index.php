<?php
    class Persona{
        //Atributos
        public $nombre = 'Lenin';

        //Metodos
        public function hablar($mensaje){
            echo($mensaje);
        }
    }
    $persona= new Persona();
    echo $persona -> nombre;
    $persona -> hablar(' Saludos Lenin');
?>
<?php
    class Persona{
        //Atributos
        public $nombre = 'Lenin';
        public $lastName = 'Samaniego';
        //Metodos
        public function hablar($mensaje){
            echo($mensaje);
        }
    }
    $persona= new Persona();
    echo $persona -> nombre;
    echo $persona -> lastName;
    $persona -> hablar(' Saludos Lenin');
?>
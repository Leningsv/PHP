<?php 
    /**
     * Persona
     */
    class Persona {
        //Atributos
        public $name = array();
        public $lastName= array();
        //Metodos
        public function Guardar($name, $lastName) {
            $this->name[]=$name;
            $this->lastName[]=$lastName;
        }
        public function Mostrar() {
            for ($i=0; $i < count($this->name); $i++) { 
                $this->Formato($this->name[$i], $this ->lastName[$i]);
            }
        }
        public function Formato($name, $lastName) {
            echo ('Nombre: '.$name.' Apellido: '.$lastName.'<br>');
        }
    }
    $persona = new Persona();
    $persona ->Guardar('Lenin','Samaniego');
    $persona ->Guardar('Diana','Pacheco');
    $persona ->Mostrar();
?>
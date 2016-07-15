<?php
    /**
     * Vihiculo
     */
    class Vehiculo
    {
        //Atributos
        public $motor=false;
        public $marca;
        public $color;
        //Metodos
        public function Estado()
        {
            if($this->motor){
                echo 'El motor esta encendido <br>';
            }else{
                echo 'El motor esta apagado <br>';
            }
        }
        public function Enceder()
        {
            if($this->motor == true){
                echo 'Cuidado, El motor ya esta encendido <br>';
            }else{
                echo 'El motor esta encendido <br>'
                $this->motor= true;
            }
        }
        function __construct()
        {
            # code...
        }
    } 
    
    $vehiculo= new Vehiculo();
    $vehiculo ->Estado();
    $vehiculo ->Enceder();
    $vehiculo ->Estado();

?>
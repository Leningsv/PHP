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
                echo 'El motor esta encendido <br>';
                $this-> motor= true;
            }
        }
        function __construct()
        {
        }
    } 
    /**
     * Moto (herencia)
     */
    class Moto extends Vehiculo
    {
        //Atributos
        public function EstadoMoto()
        {
            $this->Estado();
        }
    }
    /**
     * Herencia Multiple
     */
    class CuatriMoto extends Moto
    {
        
    }
    
    $vehiculo= new Vehiculo();
    $vehiculo ->Estado();
    $vehiculo ->Enceder();
    $vehiculo ->Estado();
    $vehiculo ->Enceder();
    echo 'Pruebas herencia con Moto <br>';
    $moto = new Moto();
    $moto -> EstadoMoto();
    echo 'Pruebas con CuatriMoto <br>';
    $cuatriMoto= new CuatriMoto();
    $cuatriMoto -> EstadoMoto();
    
    ?>
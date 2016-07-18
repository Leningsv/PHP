<?php
    interface Auto{
        public function Encender();
        public function Apagar();
    }
    interface Gasolina extends Auto{
        public function VaciarTanque();
        public function LlenarTanque($cant);
    }
    /**
     * Auto Deportivo
     */
    class Deportivo implements Gasolina
    {
        private $estado = false;
        private $tanque = 0;
        //Atributos
        public function Estado()
        {
            # code...
        }
        public function Ver()
        {
            echo 'Hola';
        }
        public function Encender()
        {
            # code...
        }
        public function Apagar()
        {
            # code...
        }
        public function VaciarTanque()
        {
            # code...
        }
        public function LlenarTanque()
        {
            # code...
        }
        //Metodos
        function __construct()
        {
            # code...
        }
    }
    $obj= new Deportivo();
    obj -> ver()
    
?>
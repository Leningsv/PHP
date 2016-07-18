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
        
        function __construct(argument)
        {
            # code...
        }
    }
    
?>
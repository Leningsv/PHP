<?php
    /**
     * Loteria
     */
    class Loteria
    {
        //Atributos
        public $numero;
        public $intentos;
        public $resultado = false;
        //Metodos        
        public function Sortear()
        {
            $minimo = $this ->numero/2;
            $maximo = $this ->numero*2;
            for ($i=0; $i < $this ->intentos; $i++) { 
                $int = rand($minimo,$maximo);
                $this -> Intentos($int);
            }
            # code...
        }
        public function Intentos($int)
        {
            if($int == $this->numero){
                echo ('<b> '.$int.' == '.$this->numero.' </b><br>');
                $this->resultado =true;
            }else{
                echo ($int.' != '.$this->numero.'<br>');
            }
        }
        function __construct($numero, $intentos)
        {
            $this->numero=$numero;
            $this->intentos=$intentos;
        }
        function __destruct()
        {
            if($this->resultado){
                echo 'Felicidades has acertado en '.$this->intentos. ' intentos.';
            }else{
                echo 'Lastima has fracasado en '.$this->intentos.' intentos';
            }
        }
    }
    $loteria= new Loteria(10,10);
    //$loteria= new Loteria(5,85);
    $loteria->Sortear();

?>
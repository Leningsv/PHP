<?php
    /**
     * Facebook
     */
    class Facebook
    {
        //Atributos
        public $nombre;
        public $edad;
        private $pass;
        //Metodos
        public function VerInformacion()
        {
            echo 'Nombre: '.$this->nombre.'<br>';
            echo 'Edad: '.$this->edad.'<br>';
            $this->CambiarPass('1234');
            echo 'Password: '.$this->pass.'<br>';
        }
        private function CambiarPass($pass)
        {
            $this->pass= $pass;
        }
        function __construct($nombre,$edad,$pass)
        {
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pass=$pass;
        }
    }
    $facebook= new Facebook('Lenin',27,'Admin1234');
    $facebook -> VerInformacion();
    echo $facebook -> nombre;

  ?>  
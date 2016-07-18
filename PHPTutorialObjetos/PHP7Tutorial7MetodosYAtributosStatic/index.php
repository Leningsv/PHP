<?php
    /**
     * pagina
     */
    class Pagina
    {
        // Atributos
        public $nombre = 'Codigo facilito';
        public static $url = 'www.codigofacilito.com';
        // Metodos
        public function Bienvenida()
        {
            echo 'Bienvenidos a <b>'.$this->nombre.'</b> la pagina es <b>'.self::$url.'</b><br>';
            echo 'Bienvenidos a <b>'.$this->nombre.'</b> la pagina es <b>'.Pagina::$url.'</b><br>';
        }
        public function Bienvenida2()
        {
            echo 'Bienvenidos a'.self::$url;
        }
        function __construct()
        {
            # code...
        }
    }
    /**
     * 
     */
    class Web extends Pagina
    {
        
        function __construct()
        {
            # code...
        }
    }
    
    $pagina =new Pagina();
    $pagina ->Bienvenida();
    Pagina :: Bienvenida2();
    Web :: Bienvenida2();
    

    
?>
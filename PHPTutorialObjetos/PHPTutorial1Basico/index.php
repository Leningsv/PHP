<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html>
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
    echo $persona -> nombre.'<br>';
    echo $persona -> lastName;
    $persona -> hablar(' Saludos Lenin');
?>
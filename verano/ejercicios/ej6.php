<?php 
// Descripción: Crea una clase Persona con propiedades nombre y edad, y un método saludar. Luego, crea una instancia de la clase y llama al método saludar.

class Persona {
    private $nombre; 
    private $edad;

    public function __construct($nombre,$edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar(){
        print "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad;
    }
}

$persona = new Persona("Manuel", 18);
$persona->saludar();


?>
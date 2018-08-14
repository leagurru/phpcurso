<?php

class Car {

    var $ruedas ;
    var $color = "Gris Artense";
    var $puertas = 4 ;

    function MoverRuedas(){
        $this->ruedas = 4;
    }

    function CrearPuertas(){
        $this->puertas = 6;
    }
}

$bmw = new Car();
$bmw->MoverRuedas();
echo "Color: " . $bmw->color ;
echo "<br>";
echo "Ruedas: " .$bmw->ruedas;
echo "<br>";

$camion = new Car();

echo "Camión:" . "<br>";
echo "Ruedas: " . $camion->ruedas = 10;
echo "<br>";
$camion->CrearPuertas();
echo "Puertas: " . $camion->puertas;
echo "<br>";

?>
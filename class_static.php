<?php
class Car {

    static $ruedas = 4;
    var $color = "Gris Artense";
    var $puertas = 4 ;

    function MoverRuedas(){
        Car::$ruedas = 10;
    }
}

$bmw = new Car();
Car::MoverRuedas();
echo Car::$ruedas;

?>
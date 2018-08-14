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

class Avion extends Car {
    var $ruedas = 20;
}

$jet = new Avion();
//$jet->MoverRuedas();
echo $jet->ruedas . "<br>";

//if(class_exists("Avion")){
//    echo "existe clase avión";
//
//}
 
?>
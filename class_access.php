<?php

class Car {

    public    $ruedas ;
    protected $color = "Gris Artense";
    private   $puertas = 4 ;

    function MoverRuedas(){
        $this->ruedas = 4;
    }

    function CrearPuertas(){
        $this->puertas = 6;
    }
}

$bmw = new Car();
$semi = new Semi();

class Semi extends Car{

    function showProperty(){
        echo "Color protegido: " . $this->color;
    }

}

echo $semi->showProperty();
 
?>
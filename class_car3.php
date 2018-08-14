<?php

class Car {
    
    function MoverRuedas(){
        echo "Ruedas movidas";
    }
}

if(method_exists("Car","MoverRuedas")) {
    echo "Método MoverRuedas existe";
}else{
    
    echo "Método MoverRuedas no existe";
}
?>
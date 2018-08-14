<?php

$file = "ejemplo.txt";

if($handle = fopen($file, 'w')){
    fwrite($handle, "Agregado");
    fclose($handle);
}else{
    echo "No se pudo abrir el archivo";
}
?>
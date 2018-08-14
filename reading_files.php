<?php

$file = "ejemplo.txt";

if($handle = fopen($file, 'r')){
    echo $contenido = fread($handle, filesize($file) ); // cada byte es un char
    fclose($handle);
}else{
    echo "No se pudo abrir el archivo";
}
?>
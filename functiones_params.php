<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    
<?php 
function greeting($mensaje){   
    echo $mensaje;   
}
  
function sumar($a,$b){
    return $a+$b;    
}

greeting("Hola");
echo "<br>";
echo "<br>";
echo "La suma es = " . sumar(2,5);
        
?>
    
    
</body>
</html>
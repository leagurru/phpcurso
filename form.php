<?php
if(isset($_POST['submit'])){
    
    $names = array("Leandro", "Student", "Owner", "Luis", "María", "Pedro");
    $min_carac = 5 ;
    $max_carac = 10;
        
    //echo "funcionó el submit";   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $min_carac){
        echo "Username debe ser más largo que " . $min_carac . " caracteres.";
        echo "<br>";
     }
    
    if(strlen($username) > $max_carac){
        echo "Username debe ser más corto que " . $max_carac . " caracteres.";
        echo "<br>";
     }    
    
    
    //verifico que el username esté en el array
    if(! in_array($username, $names)){
        echo "Username no está en el array, rechazado";
        echo "<br>";        
        
    } else {
        
        echo "Bienvenido";
        echo "<br>";
    }
    
    
    echo "Hola " . $username . ". Tu password es: " . $password;
    echo "<br>";
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="form.php" method="post">
        
        <input type="text" name="username" placeholder="Indique username">
        <br>
        <input type="password" name="password" placeholder="Indique password">
        <br>
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
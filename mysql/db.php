<?php

    // conexión a mysql
    $connection = mysqli_connect('localhost','root','', 'loginapp');
    if(!$connection){
         die("Database connection fallada");
    }

?>

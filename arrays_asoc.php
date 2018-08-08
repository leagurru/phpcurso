<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    
    // array std
    $number = array( 1,44,33);
    print_r($number);
    echo "<br>";
    
    // arrays asociados: tienen labels
    // first_name es la "label"
    $names = array("first_name"=>'Leandro',"last_name"=>"Gurru");
    
    print_r($names);
    echo "<br>";
    
    echo $names['first_name']. " " . $names['last_name'];
  
?>

</body>
</html>
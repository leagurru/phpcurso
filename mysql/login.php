<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];

// if($username && $password){
//     echo "Hola " . $username . ", tu password es " . $password ;
// }else{

//     echo "noooo";
// }

// conexión a mysql

$connection = mysqli_connect('localhost','root','', 'loginapp');
if($connection){
    echo "conectado a mysql";
}else{
    echo "no conectado a mysql";
    die("Database connection fallada");
}





}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     -->  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
 
</head>
<body>
      <div class="container">
            <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </form>
         </div>

    </div>
 </body>
</html>
<?php include "db.php"; ?>
<?php

function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Query fallada" . mysqli_error()); 
    }


    while($row = mysqli_fetch_assoc($result)){
        $id = $row[id];
        echo "<option value='$id'>$id</option>";
    }
}


function UpdateTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];

    $query  ="UPDATE users SET ";
    $query .="username = '$username', "; 
    $query .="password = '$password' ";
    $query .="WHERE id = $id"; 

    echo $query;
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Query fallada");
    }{
        echo "Registro actualizado";
    }
    
}

function deleteRow(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id       = $_POST['id'];

    $query  ="DELETE FROM users ";
    $query .="WHERE id = $id"; 

    echo $query;
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Query fallada");
        }else{
                echo "Registro borrado";            
    }
    
}


function createRow(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mètodo para sanitizar las variables y evitar sql injection
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    $hashFormat ="$2y$10$";
    $salt = "9k4h124l1hk423n43hfu22"; // 22 chars
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt);

    // conexión a mysql
    $connection = mysqli_connect('localhost','root','', 'loginapp');
    if(!$connection){
        die("Database connection fallada");
    }

    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query fallada" . mysqli_error());
    }else{
        echo "Registro creado";
    }

}

function readRows(){
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query fallada" . mysqli_error());
    }

    while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
     }
   
}
?>
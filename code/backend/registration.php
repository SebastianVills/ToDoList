<?php

include('connection.php');


// CAPTURAMOS LOS VALORES DEL FORM EN VARIABLES

$usser = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];

$check = mysqli_query($connection, "select * from users where usser = '$usser'");

$response = mysqli_num_rows($check);

//REDIRECCIONAMIENTO SI NO CUMPLE LA CONDICION
if($response > 0) {
    echo 
    '
        <script> 
        alert("El nombre no esta disponible"); 
        location.href = "../frontend/register.php"; 
        </script>
    ';
    exit;
}

// INGRESAMOS LOS DATOS EN NUESTRA TABLA
$insert = mysqli_query($connection, "insert into users (usser, password, email, number, role) values ('$usser','$password','$email','$number','cliente')");


//REDIRECCIONAMIENTO SI CUMPLE LA CONDICION
if($insert) {
    echo 
    '
    <script> 
        alert("Se registro!"); 
        location.href = "../frontend/access.php"; 
    </script>
    ';
}


//CERRAMOS LA CONEXION
mysqli_close($connection);


?>
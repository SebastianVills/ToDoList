<?php

// INSERTAR DATOS A TRAVES DEL FORM DE INGRESE DATOS

include("connection.php");
$con=conectar();

//CAPTURAMOS LOS DATOS
$id_tarea=$_POST['id_tarea'];
$name_tarea=$_POST['name_tarea'];


//LOS INSERTAMOS
$sql="INSERT INTO tareas VALUES('$id_tarea','$name_tarea')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: homeApp.php");
    
}else {
}
?>
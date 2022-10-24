<?php

include("connection.php");

$con=conectar();

//ELIMINAR UNA TAREA POR EL ID

$id_tarea=$_GET['id'];

$sql="DELETE FROM tareas  WHERE id_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: homeApp.php");
    }
?>
<?php

include("connection.php");
$con=conectar();

$id_tarea=$_POST['id_tarea'];
$name_tarea=$_POST['name_tarea'];

$sql="UPDATE tareas SET name_tarea='$name_tarea' WHERE id_tarea='$id_tarea'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: homeApp.php");
    }
?>
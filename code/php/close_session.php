<?php

//CERRAMOS LA SESION Y REDICCIONAMOS AL INICIO CON HEADER ESTATICO

session_start();

session_destroy();

header("location:../frontend/home.php");
?>
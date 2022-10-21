<?php

error_reporting(0); //PARA NO MANDAR LOS ERRORES
session_start();

$session_started = $_SESSION['cliente'];


//PLANTILLA POR DEFECTO SI USUARIO INICIO SESION O NO , CONDICION: 
if($session_started == null || $session_started == "") {
    include("../frontend/navigation_noS.php");
} else {
    include("../frontend/navigation_session.php");
}

?>
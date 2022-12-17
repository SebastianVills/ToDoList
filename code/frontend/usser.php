<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel App</title>
    <link rel="stylesheet" href="css/stylesUsser.css">
</head>
<body>

    <!-- ESTRUCTURA DEL ENCABEZADO -->
    <?php
            include("../php/session.php");
    ?>

    <main>
        <div class="main-content">
            <h1 class="primary-text">Hola <?php echo $_SESSION['cliente'] ?></h1>
            <h2 class="second-text">Bienvenido a su Panel de la App</h2>
            <div class="btns">
                <button class="btn-exp"><a href="../php/close_session.php" class="btn-exp">Cerrar Sesión</a></button>
                <button class="btn-personal"><a href="#" class="btn-personal">Ir a tareas</a></button>
                
            </div>
        </div>
    </main>
</body>
</html>
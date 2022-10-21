<?php

session_start()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesNavigationS-noS.css">
    <!-- <link rel="stylesheet" href="css/stylesHome.css"> -->
</head>
<body>
    <!-- CREACION DEL HEADER DINAMICO -->

    <div id = "box3">
        <div id="container">
            <div id="logo">
                <img src="img/logoLargo.png" alt="">
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#">¡Bienvenido <?php echo $_SESSION['cliente'];?>!</a></li>
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="usser.php">Perfil</a></li>
                    <li><a href="../php/close_session.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
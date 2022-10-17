<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
    <link rel="stylesheet" href="css/stylesRegister.css">
</head>
<body>

    <!-- ESTRUCTURA GENERAL -->
	<div id="main">
        <div id="box1"></div>

        <!-- ESTRUCTURA DEL ENCABEZADO -->
        <div id="box3">
            <div id="container">
                <div id="logo">
                    <img src="img/logoLargo.png" alt="">
                </div>
                <div id="menu">
                    <ul>
                    <li><a href="home.php">Inicio</a></li>
                        <li><a href="access.php">Acceder</a></li>
                        <li><a href="register.php">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<!-- FORMULARIO-->

    <form action="../php/registration.php" method="POST" class="form" id="registro_for" autocomplete = "off">
		<h2 class="info_h2">Registrarse</h2>
		<input type="text" class="data" required placeholder="Usuario" name="name">
        <input type="textarea" class="data" required placeholder="Correo Electronico" name="email">
        <input type="tel" class="data" required placeholder="Celular" name="number">
		<input type="password" class="data" required placeholder="Contraseña" name="password">
		<input type="submit" class="send">
	</form>

</body>
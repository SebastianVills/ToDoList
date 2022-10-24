<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceder</title>
	<link rel="stylesheet" href="css/stylesAccess.css">
	<link rel="stylesheet" href="css/stylesNavigationS-noS.css">

</head>
<body>
    <!-- ESTRUCTURA GENERAL -->
	<div id="main">
        <div id="box1"></div>

        <!-- ESTRUCTURA DEL ENCABEZADO -->
        <?php
            include("../php/session.php");
        ?>
    </div>

    <!-- FORMULARIO -->
	<form action="../php/login.php" method="POST" class="form" autocomplete = "off">
		<h2 class="info_h2">Acceder</h2>
		<input type="text" class="data" required placeholder="Usuario" name="name">
		<input type="password" class="data" required placeholder="Contraseña" name="password">
		<input type="submit" class="send">
		<h5 class="register">¿Es un nuevo usuario?</h5>
		<a href="register.php" class="new_register">Registrarse</a>
	</form>

</body>
</html>
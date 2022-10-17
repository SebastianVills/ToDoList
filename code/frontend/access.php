<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Acceder</title>
	<link rel="stylesheet" href="css/stylesAccess.css">

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

    <!-- FORMULARIO -->
	<form action="" method="" class="form" autocomplete = "off">
		<h2 class="info_h2">Acceder</h2>
		<input type="text" class="data" required placeholder="Usuario" name="usuario">
		<input type="password" class="data" required placeholder="Contraseña" name="pass">
		<input type="submit" class="send">
		<h5 class="register">¿Es un nuevo usuario?</h5>
		<a href="register.php" class="new_register">Registrarse</a>
	</form>

</body>
</html>
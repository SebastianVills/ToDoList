<?php

include("connection.php");

$usser = $_POST['name'];
$password = $_POST['password'];
$result = mysqli_query($connection, "select * from users where usser = '$usser' and password = '$password'");
$row = mysqli_num_rows($result);

if($row > 0) {
    session_start();
    $_SESSION['cliente'] = $usser;
    header("location:../frontend/usser.php");
} else {
        echo 
        '
            <script>
            alert("Correo o contraseña incorrectas");
            location.href = "../frontend/access.php";
            </script>
        ';
}

mysqli_free_result($result);
mysqli_close($connection);

?>
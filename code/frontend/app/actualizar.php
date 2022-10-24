<?php 
    include("connection.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tareas WHERE id_tarea='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link rel="stylesheet" href="../css/stylesTable.css">
        
    </head>
    <body>
                <div class="form">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_tarea" value="<?php echo $row['id_tarea']  ?>">
                                <input type="text" class="data" name="name_tarea" placeholder="Tarea" value="<?php echo $row['name_tarea']  ?>">
                                
                            <input type="submit" class="send" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
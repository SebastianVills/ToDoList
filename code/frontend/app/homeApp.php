<?php 
    //INCLUYE LA CONEXION
    include("connection.php");
    $con=conectar();
        

    $sql="SELECT *  FROM tareas";
    $query=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> APP TODO LIST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/stylesTable.css">
        
    </head>
    <body>

        <!-- ESTRUCTURA DEL ENCABEZADO -->
        <!-- <?php
            include("../../php/session.php");
        ?>  -->

        <div class="container-task">

            <!-- FORMULARIO -->
            <form action="insert.php" method="POST" class="form" autocomplete = "off">
                <h2 class="info_h2">Hola <?php echo $_SESSION['cliente'] ?></h2>
                <h4 class="info_h2 info_h4">Este es tu listado de tareas</h4>
                <input type="text" class="data" required placeholder="Codigo" name="id_tarea">
                <input type="text" class="data" required placeholder="Tarea" name="name_tarea">
                <h6 class="info_h2 info_h6">Crear nueva tarea</h6>
                <input type="submit" class="send">
                <a href="../usser.php" class="send send-before">Regresar al Panel</a>
            </form>

        <!-- CREACION DE LA TABLA DE TAREAS -->
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tarea</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_tarea']?></th>
                                                <th><?php  echo $row['name_tarea']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_tarea'] ?>" class="send">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_tarea'] ?>" class="send">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
        </div>

        


            <!-- <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            FORMULARIO PARA INGRESAR DATOS DE LA TAREA
                            
                            <h1>Hola <?php echo $_SESSION['cliente'] ?></h1>
                            <h4>Este es tu listado de tareas</h4>
                            ENVIA EL BOTON A INSERTAR.PHP
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="id_tarea" placeholder="Codigo">
                                    <input type="text" class="form-control mb-3" name="name_tarea" placeholder="Tarea">

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        CREACION DE LA TABLA
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Tarea</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_tarea']?></th>
                                                <th><?php  echo $row['name_tarea']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_tarea'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_tarea'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div> -->
    </body>
</html>
DOCUMENTACION/REGISTRO DEL AVANCE CONTINUO DEL PROYECTO PARA EL TRABAJO DE MANERA GRUPAL

-Se utilizo el servidor local phpmyadmin para el uso de php y mysql

-Se avanzo el fronted de la aplicacion web, por el momento se avanzo el frontend de Inicio, Acceder, la animacion de ingreso de ambos es la misma, faltando el fronted de Registrase y las validaciones de formulario para Acceder y Registrarse.

-Se finalizo la parte del fronted temporalmente a lo creado con registro,  se creo la base de datos "todolist", con la creacion de la tabla users, con la estructura id_usser int(100) como primary key y que sea auto incrementable, usser varchar(80), password varchar(80), email varchar(80), number varchar(80), role varchar(80) donde se capturaron los valores que son enviandos del formulario de registro y son ingresados por cada insert en nuestra base de datos.


-Se valido los registros que son ingresados en el formulario de la pagina Acceder y son rediccionados a usser que se creo luego.

-Se  añadio el archivo "usser"  en la carpeta frontend, se completo la validacion de usuarios con redireccionamiento hacia el archivo usser.php cuando el usuario esta registrado exitosamente, se finalizo la parte estetica de dicho archivo.

-En la carpeta sql se encuentra la base exportada del avance que se tiene, cada cierto tiempo se ira actualizando.

-Se finalizo la exportacion continua de la base de datos de manera continua.

-Creacion del panel del usuario registrado incluido sus estilos y del panel general es decir no registrado, si el usuario no esta registrado se tendra la vista general de la aplicacion web, en el caso contrario tendra un panel incluido y el header dinamico.

-Creacion del header dinamico y del header estatico ya sea un usuario  o no sea usuario.

-Correccion de errores por sesion iniciada, creacion del archivo cerrar sesion al igual que el rediccionamiento al inicio del header estatico.

-Correcion de errores en el frontend dinamico y testeo continuo.

-Redireccionamiento valido de ir a tareas y cerrar sesion dentro del panel por usuario.

-Se creo la lista de tarea dentro de cada usuario que se haya logueado reutilizando estilos de acceder o registrarse.

-Se creo la tabla tareas con la estructura de id_tarea int(10) y name_tarea varchar(200)

-Se valido el envio de tarea en la misma pagina web, con lo que es codigo y el nombre de la tarea que tendra.

-Se valido el ingreso de usuarios a una tarea, al igual que el de editar y eliminar la tarea que se ingreso anteriormente por un usuario.

-Se valido el regreso al Panel de usuario reutilizando estilos.

-Se utilizo estilos creados personalmente, al igual que con boostrap, ordenando lo que es el frontend y backend por separado.

-Se finalizo con las correciones para los estilos de la navegacion de usuario para la sesion activada o la sesion no activada, el rediccionamiento hacia la aplicacion de lista de tareas, creacion de lo estilos de la tabla , y los botones de editar y eliminar , actualizar e insertar en la lista de tareas.

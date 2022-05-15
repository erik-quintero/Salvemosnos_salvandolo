<?php
include("con_db.php");

if (isset($_POST['enviar']))
     {
        if (strlen ($_POST ['nombre']) >= 1 && 
        strlen ($_POST ['telefono']) >= 1 && 
        strlen ($_POST ['correo']) >= 1 &&
        strlen ($_POST ['mensaje']))
        {
            $nombre= trim($_POST['nombre']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $mensaje = trim($_POST['mensaje']);
            $consulta = "INSERT INTO datos(nombre, correo, telefono, mensaje) VALUES ('$nombre' , '$telefono', 'correo' , 'mensaje',)";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                    ?> 
                    <h3 class="ok">¡Te has inscripto correctamente!</h3>
                   <?php
                } else {
                    ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                   <?php
                }
             } else {
                    ?> 
                    <h3 class="bad">¡Por favor complete los campos!</h3>
                   <?php
            }
        }
    



?>
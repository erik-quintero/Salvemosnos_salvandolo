# Salvemosnos_salvandolo
Repositorio del hackaton "hack the ocean"

<img src="https://user-images.githubusercontent.com/47408273/168482879-95994914-c26f-4cff-9061-e6d859659164.png" height="560" width="460" >
<!--- "Dia del oceano"  Image retrieved from canva.com --->

## programacion back end y problemas
a lo largo del curso, tuvimos dificultades con el back end y en general, optamos por utilizar php como lenguaje que nos ayudara a conectar y validar el formulario con una base de datos. 
para la validacion ocupamos el siguiente codigo, previamente conectandolo con la base datos y el servidor, adjuntando de igual manera la imagen de la base de datos que se establecio. 
~~~
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
~~~
![baseDeDatos](https://user-images.githubusercontent.com/99096207/168501871-e5a5f0c2-22a0-46b2-bec1-da970be15751.jpg)
 agregamos esto con la finalidad de explicar el porque de la no validacion y envio del formulario. 
 
### Tema y discusion
Dentro de este repositorio, a pesar de los inconvenientes, se logro crear algo que creemos ser suficiente para nuestro primer hackaton, sin emabrgo sabemos que no es ni de lejos el mejor trabajo realizado, y por lo mismo nos demuestra que podemos esforzarnos mas y que sin duda de aqui solo seran mejoras lo que vivamos durante nuestro trabajo como desarrolladores; es un trabajo que consideramos ser una fantastica idea, ya que el generar una pagina, que de primeras queriamos que fuese una app, que permita conocer la informacion de la contaminacion, aunado a blogs que puedan generar reportes de situaciones en las que nos percatemos que personas esten actuando mal es sin duda una app que podria beneficiar de manera positiva a la salud maritima al mismo tiempo que mejorara la educacion civil que hoy en dia tanto necesitamos, por su puesto una app que genere reportes y exiva de alguna manera el mal comportamiento de las personas es fantastico, pero poco interactivo, por lo tanto quisimos agregar una manera en que los usuarios pudiesen ayudar al ambiente por medio de retos aleatorios para poder acceder a un ranking con recompensas, aunque claro, todo esto fue un proyecto muy ambisioso y que debido a nuestros horarios y por quiza mala suerte no contamos con la capacidad tecnica necesaria para llevarla a cabo, aunque no descartamios que un futuro pueda ser una realidad, pedimos disculpas por quiza una mala presentacion, pero prometemos mejorar de cara a siguientess retos y proyectos, focalizando siempre la actitud de todos nuestros companñeros que frente a nuestras adversidades siempre se trato de salir adelante, generando un siempre buen ambiente laboral y actitud

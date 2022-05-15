<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>SalavemosSalvandolo</title>
</head>
  <!--todo esto se debe estilizar con css y hacerle las modificaciones requeridas a las class o los identificadores que deseen-->
<body>
    <section>
        <header>
            <h1>Salvemos el agua</h1>
        </header>
    </section>
    <section class="navegacion">
        <li>
            <ul> <a href="index.html">Inicio</a> </ul>
            <ul> <a href="ayuda.html"> como podemos ayudar </a> </ul>
            <ul> <a href="reporte.php"> Generar reporte </a> </ul>
        </li>
    </section>
    <div class="reporte_intro">
        <h1>Por que y como generar un reporte</h1>
        <p>Un reporte anonimo puede ayudar a que las autoridades se den cuenta de la falta de vigilancia en zonas de turismo o que puedan ser de gran riesgo para la salud maritima, este reporte es totalmente anonimo y permite lo previamente dicho.
            Lo unico que se requiere es tomar una foto de la persona o grupo de personas que este atentando en contra de la inocuidad maritima, de igual manera se puede generar un reporte express compartiendo la ubicacion actual de tal manera que pueda ser recibida y atendida lo mas rapido posible, cabe destacar que mientras mejor detallado sea el reporte, las autoridades en custion puedan actuar a pesar de que ya no se este realizando lo dicho o mostrado por la persona.
        </p>
    </div>
    <section class="reporte">
        <h2>generar reporte</h2>
        
        <form action="#" method="post" class="formulario">
            <input type="text" name= "nombre" class="formulario_input">
            <label for="formulario" class="formulario_label">Nombres</label>
            <input type="text" name= "Correo" class="formulario_input">
            <label for="formulario" class="formulario_label">Correo</label>
            <input type="text" name= "telefono" class="formulario_input">
            <label for="formulario" class="formulario_label">Telefono</label>
            <input type="text" name= "mensaje"class="formulario_input">
            <label for="formulario" class="formulario_label">Mensaje de reporte</label>
            <input id="archivo" name= ""type="file">
            <label for="archivo" class="imagen"> selecciona imagenes</label> <br> <br>
            <input type="submit" name="enviar" class="formulario_submit">
        </form>
        <?php 
        include("registrar.php");
        ?>
    </section>
</body>
<br>
<footer>
        &copy;Innovaccion virtual 2022
<script src="form.js"></script>
</footer>
</html>
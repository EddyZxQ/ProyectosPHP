<?php
session_start();
if (isset($_SESSION['Contenido'])){

$areaTrabajo = $_SESSION['Contenido'];

}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilosBlocNotas.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <title>NotazzCriptao</title>
</head>
<body>
<section>
    <form action="archivos.php" method="post">
        <nav>
            <ul>
                <li> Archivo
                    <ul>
                        <li id="nuevo"><a href="nuevo.php">Nuevo</a></li>
                        <li id="abrir"><a href="#">Abrir</a></li>
                        <li id="guardar"><input type="submit" name="btnGuardar" value="Guardar"></li>
                        <li id="guardarComo"><a href="#">Guardar como</a></li>
                        <!-- <li id="codificarauto"><a href="#">Codificado auto</a></li> En construccion-->
                        <li id="codificar"><a href="#">Codificar</a></li>
                        <li id="decodificar"><a href="#">Descodificar</a></li>
                    </ul>
                </li>
            </ul>

        </nav>

     <!--  El htmlspecialchars() es un metodo para poner mas seguridad y evitar hakeos es recomenadod usarlo -->
        <div id="contenedorAreaTrabajo">
            <textarea id="areaTrabajo" name="areaTrabajo"><?php
                if (isset($areaTrabajo)){
                    echo $areaTrabajo;

                }?></textarea>
        </div>

        <div id="ventanaEmergenteAbrir" class="oculto">
                <p>Seleccione que archivo desea importar: </p>
                <input type="text" name="fieldRutaAbrir" id="fieldRutaAbrir">
                <input type="submit" id="inputabrir" value="abrir" name="inputabrir">
        </div>

        <div id="ventanaEmergenteGuardarComo" class="oculto">
                <p>Guardar como:  </p>
                <input type="text" name="fieldGuardarComo" id="fieldGuardarComo">
                <input type="submit" id="inputguardarcomo" value="Guardar como" name="inputguardarcomo">
        </div>

        <div id="ventanaEmergenteCodificar" class="oculto">
            <p>CODIFICANDO....</p>
            <p>Establece una contraseña:  </p>
            <input type="text" name="passCodificado" id="passCodificado">
            <input type="submit" id="inputEstablecerPass" value="Establecer" name="inputEstablecerPass">
        </div>

        <div id="ventanaEmergenteDecodificar" class="oculto">
            <p>DECODIFICANDO.....</p>
            <p>Introduzca la contraseña:  </p>
            <input type="text" name="passDescodificado" id="passDescodificado">
            <input type="submit" id="inputValidarPass" value="Validar" name="inputAnularPass">
        </div>

    </form>
</section>
<script src="JS/funcionalidad.js"></script>

</body>

</html>
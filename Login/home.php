<?php

session_start();

$usersesion = $_SESSION['usuario'];

if ($usersesion == null || $usersesion == ''){
    die("ERROR INICAR SESION");
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estiloshome.css">
    <title>Home</title>
</head>
<body>
<header>

    <nav id="menuhome">
        <ul>
            <!--<li id="bienvenida">Bienvenido <?php echo $_SESSION['usuario'] ?></li> -->
            <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
        </ul>
    </nav>
</header>
<section>

    <div id="bienvenida">
        <div id="menuCerrar"><a href="#" id="cerrar">X</a> </div>


        <h4>Bienvenido <?php echo $_SESSION['usuario'] ?></h4>
    </div>






</section>
</body>
</html>
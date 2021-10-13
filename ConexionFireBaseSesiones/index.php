<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>LOGIN</title>
</head>
<body>
<section>
    <form action="validarLogin.php" method="post">

        <h1 id="titulo">Login</h1>

        <div id="contenedorloginfila">

            <div id="contenedorlogincolumna1">



            </div>

            <div id="contenedorlogincolumna2">
                <input type="text" name="nombre" id="nombre" placeholder="Usuario:">
                <input type="password" name="pass" id="pass" placeholder="Contraseña:">

                <input type="submit" value="login">

                <div id="opcionesLogin">
                    <!--<div id="olvidadoPass"> <a href="#">¿Has olvidado la contraseña?</a> </div> !-->

                    <div id="registrar"> <a href="registrar.php">Registrar</a> </div>
                </div>
            </div>

        </div>

    </form>




</section>

</body>
</html>
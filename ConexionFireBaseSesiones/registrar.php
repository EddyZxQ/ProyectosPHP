<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilos.css">
    <title>Registrar</title>
</head>
<body>
<section>
    <form action="validarRegistro.php" method="post">

        <h1 id="titulo">Registrar</h1>

        <div id="contenedorloginfila">

            <div id="contenedorlogincolumna1">



            </div>

            <div id="contenedorlogincolumna2">
                <input type="text" name="nombre" id="nombre" placeholder="Intoduce nombre:">
                <input type="text" name="email" id="email" placeholder="Intoduce email:">
                <input type="password" name="pass" id="pass" placeholder="Introduce Contraseña:">
                <input type="password" name="passval" id="passval" placeholder="Repite contraseña:">

                <input type="submit" value="registrar">

                <div id="opcionesLogin">
                    <div id="olvidadoPass"> <a href="index.php">¿Ya tienes cuenta?</a> </div>
                </div>
            </div>

        </div>

    </form>

</section>

</body>
</html>
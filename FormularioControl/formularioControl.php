<?php

/*Crear Archivo Para El Usuario*/
$archivo = fopen("registro".$_POST['idRenta'].".txt", 'w');

$almacen = "Identificador: ".$_POST['idRenta']."\n";
$almacen .= "Nombre: ".$_POST['nombre']."\n";
$almacen .= "Apellidos: ".$_POST['apellidos']."\n";
$almacen .= "Fecha Nacimiento: ".$_POST['fechaNacimiento']."\n";
$almacen .= "DNI: ".$_POST['dni']."\n";
$almacen .= "Estado Civil: ".$_POST['estadoCivil']."\n";
$almacen .= "Estado Actual: ".$_POST['estadoActual']."\n";
$almacen .= "Tasa Prestaciones: ".$_POST['tasaPrestaciones']."\n";
$almacen .= "Ingresos Anuales: ".$_POST['ingresosAnuales']."\n";
$almacen .= "Valor Declarar: ".$_POST['valorDeclarar']."\n";
$almacen .= "Telefono: ".$_POST['telefono']."\n";
$almacen .= "Email: ".$_POST['email']."\n";
$almacen .= "Direccion: ".$_POST['direccion']."\n";
$almacen .= "Notas: ".$_POST['notas']."\n";

fwrite($archivo,$almacen);
fclose($archivo);


/*Crear archivo de almacen opcional por si el usuario se a equivocado introduciendo datos*/
$archivoAlmacen = fopen("almacenContenidoEdit.txt", "w");

$contenidoAlmacen =$_POST['idRenta'].",".$_POST['nombre'].",".$_POST['apellidos'].",".$_POST['fechaNacimiento'].",".$_POST['dni'].",".$_POST['estadoCivil'].",".$_POST['estadoActual'].",".$_POST['tasaPrestaciones'].",".$_POST['ingresosAnuales'].",".$_POST['valorDeclarar'].",".$_POST['telefono'].",".$_POST['email'].",".$_POST['direccion'].",".$_POST['notas'];

fwrite($archivoAlmacen,$contenidoAlmacen);
fclose($archivoAlmacen);

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilosPanelControl.css">
    <link rel="shortcut icon" href="images/panelcontrol.png" type="image/x-icon">
    <title>Panel Control</title>
</head>
<body>
<section>

    <div id="informacionControl">

        <div id="icContenido">

            <?php   echo "<p>Identificador: ", $_POST['idRenta'], "</p>";
                    echo "<p>Nombre: ", $_POST['nombre'], "</p>";
                    echo "<p>Apellidos: ", $_POST['apellidos'], "</p>";
                    echo "<p>Fecha nacimiento: ", $_POST['fechaNacimiento'], "</p>";
                    echo "<p>DNI: ", $_POST['dni'], "</p>";
                    echo "<p>Estado civil: ", $_POST['estadoCivil'], "</p>";
                    echo "<p>Estado actual: ", $_POST['estadoActual'], "</p>";
                    echo "<p>Tasa Prestaciones: ", $_POST['tasaPrestaciones'], "</p>";
                    echo "<p>Ingresos Anuales:  ", $_POST['ingresosAnuales'], "</p>";
                    echo "<p>Valor a Declarar: ", $_POST['valorDeclarar'], "</p>";
                    echo "<p>Telefono: ", $_POST['telefono'], "</p>";
                    echo "<p>Email: ", $_POST['email'], "</p>";
                    echo "<p>Direccion: ", $_POST['direccion'], "</p>";
                    echo "<p>Notas: ", $_POST['notas'], "</p>";
            ?>
        </div>
    </div>



    
    <div>
        <form action="formularioEnvio.php" method="post"> <input type="submit" value="Nuevo"> </form>
    </div>

    <div>
        <a href="<?php echo "registro".$_POST['idRenta'].".txt" ?>" download><input type="submit" value="Descargar TXT"></a>
    </div>

    <div>
        <form action="formularioEditar.php" method="post"> <input type="submit" value="Editar"></form>
    </div>

</section>
</body>
</html>
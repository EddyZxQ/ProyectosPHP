<?php

$ficherodatos = fopen("almacenContenidoEdit.txt","r+");

$contenidoFichero = fread($ficherodatos,filesize("almacenContenidoEdit.txt"));

fclose($ficherodatos);

$cont = 1;
$datoF = strtok($contenidoFichero, ",");

$informacionuser[0] =$datoF;

while ($datoF !== false){

    $datoF = strtok(",");
    $informacionuser[$cont] = $datoF;

    $cont++;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/estilosFormulario.css">
    <link rel="shortcut icon" href="images/formulario.png" type="image/x-icon">

    <title>Formulario Envio</title>
</head>
<body>

<div id="contenedorFormulario">

    <form method="post" action="formularioControl.php" id="formulario">

        <div class="fila">
            <label for="idRenta">Identificador: </label>
            <input type="text" id="idRenta" name="idRenta" value="<?php echo $informacionuser[0] ?>">
        </div>

        <div class="fila">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $informacionuser[1] ?>">
        </div>

        <div class="fila">
            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="apellidos" value="<?php echo $informacionuser[2] ?>">
        </div>

        <div class="fila">
            <label for="fechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $informacionuser[3] ?>">
        </div>

       <div class="fila">
            <label for="dni">DNI: </label>
            <input type="text" id="dni" name="dni" value="<?php echo $informacionuser[4] ?>">
       </div>

        <div class="fila">
            <label for="estadoCivil">Estado civil: </label>
            <input type="text" id="estadoCivil" name="estadoCivil" value="<?php echo $informacionuser[5] ?>">
        </div>

        <div class="fila">
            <label for="estadoActual">Estado actual: </label>
            <select name="estadoActual" id="estadoActual" value="<?php echo $informacionuser[6] ?>">

                <option value="autonomo">Autonomo</option>
                <option value="desempleado">Desempleado</option>
                <option value="trabajador">Trabajador</option>
                <option value="otros">Otros</option>

            </select>
        </div>

        <div class="fila">
            <label for="tasaPrestaciones">Tasa Prestaciones: </label>
            <select name="tasaPrestaciones" id="tasaPrestaciones" value="<?php echo $informacionuser[7] ?>">

                <option value="21">21%</option>
                <option value="0">0%</option>
                <option value="10">10%</option>
                <option value="4">4%</option>

            </select>
        </div>

        <div class="fila">
            <label for="ingresosAnuales">Ingresos Anuales: </label>
            <input type="text" id="ingresosAnuales" name="ingresosAnuales" value="<?php echo $informacionuser[8] ?>">
        </div>

        <div class="fila">
            <label for="valorDeclarar">Valor a Declarar: </label>
            <input type="text" id="valorDeclarar" name="valorDeclarar" value="<?php echo $informacionuser[9] ?>">
        </div>

        <div class="fila">
            <label for="telefono">Telefono (Opcional): </label>
            <input type="tel" id="telefono" name="telefono" value="<?php echo $informacionuser[10] ?>">
        </div>

        <div class="fila">
            <label for="notas">Email (Opcional): </label>
            <input type="text" id="email" name="email" value="<?php echo $informacionuser[11] ?>">
        </div>

        <div class="fila">
            <label for="notas">Direccion (Opcional): </label>
            <input type="text" id="direccion" name="direccion" value="<?php echo $informacionuser[12] ?>">
        </div>

        <div class="fila">
            <label for="notas">Notas (Opcional): </label>
            <textarea id="notas" name="notas" rows="4" cols="50"><?php echo $informacionuser[13] ?></textarea>
        </div>
        <input type="submit">

    </form>



</div>

</body>
</html>

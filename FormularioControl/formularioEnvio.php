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
            <input type="text" id="idRenta" name="idRenta">
        </div>

        <div class="fila">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="fila">
            <label for="apellidos">Apellidos: </label>
            <input type="text" id="apellidos" name="apellidos">
        </div>

        <div class="fila">
            <label for="fechaNacimiento">Fecha Nacimiento: </label>
            <input type="date" id="fechaNacimiento" name="fechaNacimiento">
        </div>

       <div class="fila">
            <label for="dni">DNI: </label>
            <input type="text" id="dni" name="dni">
       </div>

        <div class="fila">
            <label for="estadoCivil">Estado civil: </label>
            <input type="text" id="estadoCivil" name="estadoCivil">
        </div>

        <div class="fila">
            <label for="estadoActual">Estado actual: </label>
            <select name="estadoActual" id="estadoActual">

                <option value="autonomo">Autonomo</option>
                <option value="desempleado">Desempleado</option>
                <option value="trabajador">Trabajador</option>
                <option value="otros">Otros</option>

            </select>
        </div>

        <div class="fila">
            <label for="tasaPrestaciones">Tasa Prestaciones: </label>
            <select name="tasaPrestaciones" id="tasaPrestaciones">

                <option value="21">21%</option>
                <option value="0">0%</option>
                <option value="10">10%</option>
                <option value="4">4%</option>

            </select>
        </div>

        <div class="fila">
            <label for="ingresosAnuales">Ingresos Anuales: </label>
            <input type="text" id="ingresosAnuales" name="ingresosAnuales">
        </div>

        <div class="fila">
            <label for="valorDeclarar">Valor a Declarar: </label>
            <input type="text" id="valorDeclarar" name="valorDeclarar">
        </div>

        <div class="fila">
            <label for="telefono">Telefono (Opcional): </label>
            <input type="tel" id="telefono" name="telefono">
        </div>

        <div class="fila">
            <label for="notas">Email (Opcional): </label>
            <input type="text" id="email" name="email">
        </div>

        <div class="fila">
            <label for="notas">Direccion (Opcional): </label>
            <input type="text" id="direccion" name="direccion">
        </div>

        <div class="fila">
            <label for="notas">Notas (Opcional): </label>
            <textarea id="notas" name="notas" rows="4" cols="50"></textarea>
        </div>
        <input type="submit">

    </form>



</div>

</body>
</html>

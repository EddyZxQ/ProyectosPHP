<?php


function cifrar($textoEntrada){
    $charArray = str_split($textoEntrada); //Con la funcion str_split() convertimos las letras de una cadena en un array
    $longitud = strlen($textoEntrada); //la funcion strlen() nos permite saver la longitud del texto

    $almacen = "";


    //Codificar

    for ($i=0; $i< $longitud; $i++){

        $numAscii = ord ($charArray[$i])+3; //la funcion ord() pasa el char almacenado en el array a su equivalencia en numero ascii

        $letraAscii = chr($numAscii); //la funcion chr() devuelve el numero que le pases a char

        $almacen = $letraAscii . $almacen; //Lo esta cogiendo al reves el caracter . es el + o el tambien denominado concatenar en otros lenguajes


    }
    return $almacen;
}

function descifrar($textoSalida){
    $charArray = str_split($textoSalida);
    $longitud = strlen($textoSalida);
    $almacen = "";

    for ($i = 0; $i < $longitud; $i++){
        $numAscii = ord($charArray[$i])-3;
        $letraAscii = chr($numAscii);

        $almacen = $letraAscii . $almacen;
    }

    return $almacen;
}

session_start();

/*Abre ficheros*/

if (isset($_POST['fieldRutaAbrir'])){ //Si no es undefined
    if ($_POST['fieldRutaAbrir'] != null){ //Si no es undefined
        $rutaEntrada =$_POST['fieldRutaAbrir'];

        $_SESSION['archivoAbierto'] = $rutaEntrada;

        $gestor = fopen($rutaEntrada, "r");
        $contenido = fread($gestor, filesize($rutaEntrada));
        fclose($gestor);
        $_SESSION['Contenido']= $contenido;
    }
}

/*Guarda Ficheros como*/

if (isset($_REQUEST['inputguardarcomo'])){ //Si no es undefined
    if ($_POST['fieldGuardarComo'] != ""){//Si no es undefined
        $rutaSalida = $_POST['fieldGuardarComo'];

        $archivAbierto =fopen($rutaSalida, 'w');
        fwrite($archivAbierto,$_POST['areaTrabajo']);
        fclose($archivAbierto);
        $_SESSION['Contenido']= $_POST['areaTrabajo'];

    }
}

/*Guardar*/

if (isset($_REQUEST['btnGuardar'])){
    $contenido = $_POST['areaTrabajo'];

    $archivo = fopen($_SESSION['archivoAbierto'],"w+");

    fwrite($archivo,$contenido);
    fclose($archivo);



    $_SESSION['Contenido']= $contenido;

}

/*Codificar*/

if (isset($_REQUEST['inputEstablecerPass'])){

    $_SESSION['pazzword'] = $_POST['passCodificado'];
    $_SESSION['Contenido'] = cifrar($_POST['areaTrabajo']);
}

if (isset($_REQUEST['inputAnularPass'])){
    if ($_POST['passDescodificado'] != ""){
        if ($_POST['passDescodificado'] == $_SESSION['pazzword']){
            $_SESSION['Contenido'] = descifrar($_POST['areaTrabajo']);
        }
    }
}




/*Volver al bloc de notas*/

$uwu = $_SERVER['HTTP_REFERER'];

header("Location: $uwu");






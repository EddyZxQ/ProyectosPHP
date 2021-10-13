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



$direccion = "localhost";
$user = "root";
$pass = "";
$bd = "websitedb";


if ($_POST['nombre'] != null || $_POST['nombre'] != ""){

$nombre = cifrar($_POST['nombre']);
//$nombre = "edgar";
$conexion = new mysqli($direccion, $user, $pass, $bd); //Se coencta a la base datos

if ($conexion -> connect_error){
    die("Conexion Fallida". $conexion ->connect_error);
}

//Consulta

$sql = "select * from usuarios where nombre = '".$nombre."'";
$usuario = $conexion -> query($sql); // []

if ($usuario -> num_rows > 0){
 $fila = $usuario -> fetch_assoc();


 $nombreUsuario = descifrar($fila['nombre']);
 $passUsuario = descifrar($fila['pass']);


}

$conexion ->close();

}

//Inicio sesion

if ($_POST['nombre'] == $nombreUsuario && $_POST['pass'] == $passUsuario){

    session_start();


    $_SESSION['usuario'] = $nombreUsuario;
    header("Location:home.php");
}else{
    echo'<script type="text/javascript">
    alert("Usuario o Contraseña erroneo");

    window.location.href="login.php";
    </script>';

}

?>
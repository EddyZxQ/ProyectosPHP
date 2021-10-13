<?php

/*Funcion de cifrado*/
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

/*Conexion*/

$direccion = "localhost";
$user = "root";
$pass = "";
$basedatos = "websitedb";


$conexion = new mysqli($direccion, $user, $pass, $basedatos);


if (isset ($_POST['nombre'] ) &&isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['passval'])){
    if ($_POST['nombre'] != "" && $_POST['email'] != "" && $_POST['pass'] != "" && $_POST['passval']!= ""){


        if ($conexion -> connect_error){
            die("Error registro fallido". $conexion ->connect_error);
        }


        $nombre = cifrar($_POST['nombre']);
        $contra = cifrar($_POST['pass']);
        $email = cifrar($_POST['email']);


        $sql = "INSERT INTO usuarios (nombre,pass,email) VALUES ('".$nombre."','".$contra."','".$email."')";


        if (mysqli_query($conexion, $sql)) {
            echo '<script>
                   window.location.href = "login.php";
                   alert("Registro realizado correctamente");
               </script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
    }


}

if ($conexion -> connect_error){
    die("Error registro fallido ". $conexion -> connect_error);
}




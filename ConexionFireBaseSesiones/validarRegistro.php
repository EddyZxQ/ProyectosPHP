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

$nombre = cifrar($_POST['nombre']);
$pass = cifrar($_POST['pass']);
$email = cifrar($_POST['email']);

/*Conexion*/

$url = "https://bdsencilla-default-rtdb.firebaseio.com/Usuarios.json";

$contenido = '{"nombre":"'.$nombre.'", "pass":"'.$pass.'", "email":"'.$email.'"}';

$ch = curl_init(); //Instaciamos el objeto CURL esta es una libreria de php que permite conectarse y comunicarse con diferentes tipos de servidores y diferentes tipos de protocolos.

//OPCIONES DE CURL

curl_setopt($ch, CURLOPT_URL, $url); //Por aqui pasamos la URL que queremos ejecutar
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //Con esta linea le estas diciendo al objeto ch de curl que aceptas que te regresew un resultado
curl_setopt($ch, CURLOPT_POST, 1); //la manera de enviar los datos va a ser atraves del post
curl_setopt($ch, CURLOPT_POSTFIELDS, $contenido); //por aqui le paso el contenido
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain')); //No me interesa aun
$respose = curl_exec($ch); //LANZA TODOx EL CODIGO ANTERORP

curl_close($ch);

//Comprobacion
if (curl_errno($ch)){  //Si ch nos tira un error sacame el error sinos dime que todoz estuvo OK
    echo  'Error'.curl_errno($ch);
}else{
    echo '<script>
                   window.location.href = "index.php";
                   alert("Registro realizado correctamente");
               </script>';
}



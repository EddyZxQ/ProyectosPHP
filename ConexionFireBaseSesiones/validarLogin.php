<?php



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

//Conexion

$url = "https://bdsencilla-default-rtdb.firebaseio.com/Usuarios.json";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$resultado = curl_exec($ch);

curl_close($ch);


$datos = json_decode($resultado, true);

foreach ($datos as $i => $valor) {

    if (descifrar($valor['nombre']) == $_POST['nombre'] && descifrar($valor['pass']) == $_POST['pass']) {
        session_start();

        $_SESSION['usuario'] = $_POST['nombre'];
        header("Location:home.php");
    }
}

//Sinos devuelveme al index


echo'<script type="text/javascript">
    alert("Usuario o Contraseña erroneo");

    window.location.href="index.php";
    </script>';


?>
<?php

session_start();
$_SESSION['Contenido'] = "";

$referencia = $_SERVER['HTTP_REFERER'];

header("Location: $referencia");
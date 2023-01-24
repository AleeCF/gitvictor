<?php

include("conexion.php");
$Id=$_GET["CODIGOARTICULO"];
$Nom=$_GET["SECCION"];
$Ape=$_GET["NOMBREARTICULO"];
$Dir=$_GET["PRECIO"];


error_log("DALEDONDALE" . $Nom . "   " . $Ape . "   " . $Dir);
$base->query("INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO) VALUES ('$Id','$Nom', '$Ape', '$Dir')");
header("Location:indexInicial.php");

?>
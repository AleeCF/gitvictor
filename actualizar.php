<?php

include("conexion.php");

$Id=$_GET["id"];
$Nom=$_GET["nom"];
$Ape=$_GET["ape"];
$Dir=$_GET["dir"];

$base->query("UPDATE productos SET SECCION='$Nom', NOMBREARTICULO='$Ape', PRECIO='$Dir' WHERE CODIGOARTICULO='$Id'");
header("Location:indexInicial.php");

?>
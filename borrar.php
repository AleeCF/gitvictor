<?php

include("conexion.php");
$Id = $_GET["id"];
$base->query("DELETE FROM productos WHERE CODIGOARTICULO='$Id'");
error_log("holaaaaaaaa" . $Id);
header("Location:indexInicial.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

  include("conexion.php");

  $Id = $_GET["CODIGOARTICULO"];
  $Nom = $_GET["SECCION"];
  $Ape = $_GET["NOMBREARTICULO"];
  $Dir = $_GET["PRECIO"];

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="get" action="actualizar.php">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="CODIGOARTICULO"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $Id?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="SECCION"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nom?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="NOMBREARTICULO"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $Ape?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="PRECIO"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $Dir?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
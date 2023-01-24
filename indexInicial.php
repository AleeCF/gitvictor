<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<?php
  include("conexion.php");
  $conexion=$base->query("SELECT * FROM productos");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">CODIGOARTICULO</td>
      <td class="primera_fila">SECCION</td>
      <td class="primera_fila">NOMBRE</td>
      <td class="primera_fila">PRECIO</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
  
    <?php
      foreach($registros as $producto):
    ?>

		
   	<tr>
      <td><?php echo $producto->CODIGOARTICULO?> </td>
      <td><?php echo $producto->SECCION?></td>
      <td><?php echo $producto->NOMBREARTICULO?></td>
      <td><?php echo $producto->PRECIO?></td>
 
      <td class="bot"><a href="borrar.php?id=<?php echo $producto->CODIGOARTICULO?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'><a href="editarInicial.php?CODIGOARTICULO=<?php echo $producto->CODIGOARTICULO?> & SECCION=<?php echo $producto->SECCION?> & NOMBREARTICULO=<?php echo $producto->NOMBREARTICULO?> & PRECIO=<?php echo $producto->PRECIO?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
    
    <?php
      endforeach;
    ?>

	<tr>
	<td></td>
      <form method="get" action="insertar.php">
        <td><input type='text' name='CODIGOARTICULO' size='10' class='centrado'></td>
        <td><input type='text' name='SECCION' size='10' class='centrado'></td>
        <td><input type='text' name='NOMBREARTICULO' size='10' class='centrado'></td>
        <td><input type='text' name='PRECIO' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      </form>
  </table>

<p>&nbsp;</p>
</body>
</html>
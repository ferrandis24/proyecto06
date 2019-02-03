<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios where id = 1 ");
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="proyecto06.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <ul>
      <li><a class="active" href="index.php">Inicio</a></li><br>
      <li><a href="listaUsuario.php">Jugadores</a></li>
    </ul>
    
			Siguiente fila
      <input type="text" id="fila" value="">
      Siguiente columna
      <input type="text" id="columna" value="">
      <button type="button" name="button" onclick="comprobarMovimiento()">Comprobar movimiento</button>
      <br><br>
      Movimientos realizados
      <input type="text" id="movimientosRealizados1" value="" disabled=”disabled” >
      Num movimientos
      <input type="text" id="numMovimientos" value="" disabled=”disabled”>
      <br><br>
      Mensajes
      <input type="text" id="mensajes" value="" disabled=”disabled”>
     <script type="text/javascript" src="proyecto06.js">
     </script>
	 </body>
 </html>

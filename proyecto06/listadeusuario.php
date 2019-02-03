<?php
$conexion = new mysqli("localhost", "root", "", "juegos");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}
else {
$resultado = $conexion->query("SELECT * FROM usuarios");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <title></title>
        <link rel="stylesheet" href="estilos.css">
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>

    <ul>
      <li><a class="active" href="index.php">Inicio</a></li>
      <li><a href="listadoUsuarios.php">Jugadores</a></li>
    </ul>
    <div>
  <table>
    <br>
    <tr>
      <td style="background-color:#498150; text-align:center;"><b>ID</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Nombre</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Apellidos</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Edad</b></td>
      <td style="background-color:#498150; text-align:center;"><b>Curso</b></td>
      <td style="background-color:#498150;text-align:center;"><b>Puntuación</b></td>

    </tr>
  </body>
</html>

<?php
require "../src/Conexion.php";
require "../src/Proyecto.php";
$p=new Proyecto();
$p->conectar();
$resultado=$p->listarProyectos();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Examen</title>
  </head>
  <body>
    <h3>NUEVO TRABAJADOR</h3>
    <form  action="registro.php" method="post">
      Nombre<br>
      <input type="text" name="nombre" id="nombre" value="">
      <br>Apellidos<br>
      <input type="text" name="apellidos" id="apellidos" value="">
      <br>Precio/Hora<br>
      <input type="text" name="precio_hora" id="precio_hora" value="">
      <br>Descripción del proyecto<br>
      <select class="" name="proyecto" id="proyecto">
        <?php
          foreach ($resultado as $proyecto) {
            $id=$proyecto["id"];
            $descripcion=$proyecto["nombre"];
            echo "<option value='$id'>$descripcion</option>";
          }
        ?>
      </select>
      <br><br>
      <input type="submit" name="" value="Registrar" onclick="return validarFormulario();">
    </form>
  </body>
  <script type="text/javascript" src="./js/main.js"></script>
</html>

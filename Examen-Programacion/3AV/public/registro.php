<?php
require "../src/Conexion.php";
require "../src/Trabajador.php";
$t=new Trabajador();
$error=$t->comprobarCampos($_POST);
if($error){
  echo "<script type='text/javascript'>alert('$error');</script>"; 
}else{
  $t->conectar();
  $t->insertarTrabajador();
  $idTrabajador=$t->ultimoRegistro();
  $t->insertarProyTrab($idTrabajador,$_POST["proyecto"]);
}
?>

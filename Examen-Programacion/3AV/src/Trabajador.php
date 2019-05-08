<?php
class Trabajador extends Conexion
{
  private $nombre;
  private $apellidos;
  private $precio_hora;


  function __construct()
  {

  }


  public function comprobarCampos($post){
     $error=null;
     if(!isset($post)||!isset($post["nombre"])||!isset($post["apellidos"])||!isset($post["precio_hora"])){
       $error="";
     }else{
       $error=false;
       $this->nombre=$post["nombre"];
       $this->apellidos=$post["apellidos"];
       $this->precio_hora=$post["precio_hora"];
      echo '<script language="javascript">confirm("Insercion correcta!")</script>';

      echo '<script language="javascript">window.location = "index.php"</script>';
     }
     return $error;
   }


   public function insertarTrabajador()
   {
      $consulta="INSERT INTO trabajador (nombre, apellidos, precio_hora)
      VALUES ('$this->nombre', '$this->apellidos', $this->precio_hora)";
      $this->conexion->query($consulta);
    }


    public function ultimoRegistro()
    {
      $consulta="SELECT * FROM trabajador ORDER BY id DESC LIMIT 1";
      $resultado=$this->conexion->query($consulta);
      foreach($resultado as $value){
        $idTrabajador=$value["id"];
      }
      return $idTrabajador;
    }


    public function insertarProyTrab($trabajador,$proyecto)
    {
      $consulta="INSERT INTO trabajador_proyecto (id_trabajador, id_proyecto, horas)
      VALUES ($trabajador, $proyecto, $this->precio_hora)";
      $this->conexion->query($consulta);
    }


}
 ?>

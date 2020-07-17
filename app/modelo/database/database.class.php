<?php
class Database{
    private const URL = "localhost";
    private const USER = "root";
    private const PASSWORD = "";
    private const NOMBRE = "catalogo";
    private $mysql;

    function __construct(){
      $this->mysql = new mysqli($this::URL, $this::USER, $this::PASSWORD, $this::NOMBRE);
      if($this->mysql->connect_errno){
        echo "No se pudo realizar la conexión con MySQL ".$this->mysql->connect_error;
        exit();
      }
    }

    function actualizar($consulta){
      $resultado = $this->mysql->query($consulta);
      $registros = $this->mysql->affected_rows;
      $resultado->free();
      return $registros;
    }
    function insertId(){
      return $this->mysql->insert_id;
    }

    function seleccionar($consulta){
      $resultado = $this->mysql->query($consulta);
      $registros = array();
      while($renglon = $resultado->fetch_object()){
        array_push($registros, $renglon);
      }
      $resultado->free();
      return $registros;
    }
}
?>

<?php
class DAOCategoria{
  function crearRegistro($categoria){
    $q = "INSERT INTO categoria (nombre) VALUES('$categoria->getNombre()')";
    $db = new Database();
    $db->actualizar($q);
    $categoria->setClave($db->insertId());
    return $categoria;
  }
  function actualizarRegistro($categoria){
    $q = "UPDATE categoria SET nombre='$categoria->getNombre()' WHERE clave=$categoria->getClave()";
    $db = new Database();
    return $db->actualizar($q);
  }
  function obtenerRegistro($clave){
    $q = "SELECT * FROM categoria WHERE clave=$clave";
    $db = new Database();
    $registros = $db->seleccionar($q);
    $categoria = null;
    foreach($registros as $registro){
      $categoria = new Categoria($registro->clave, $registro->nombre);
    }
    return $categoria;
  }
  function obtenerRegistros(){
    $q = "SELECT * FROM categoria";
    $db = new Database();
    $registros = $db->seleccionar($q);
    $categorias = array();
    foreach($registros as $registro){
      $categoria = new Categoria($registro->clave, $registro->nombre);
      array_push($categorias, $categoria);
    }
    return $categorias;
  }
  function eliminarRegistro($clave){
    $q = "DELETE FROM categoria WHERE clave=$clave";
    $db = new Database();
    return $db->actualizar($q);
  }
}
?>

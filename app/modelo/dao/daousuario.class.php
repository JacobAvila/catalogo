<?php
  class DAOUsuario{
    function crearRegistro($usuario){
      $q = "INSERT INTO Usuario VALUES('$usuario->getCorreo()',
        '$usuario->getNombre()', '$usuario->getApellidos()',
        '$usuario->getPassword()', '$usuario->getTelefono()',
        '$usuario->getCalle()', '$usuario->getNumero_int()',
        '$usuario->getNumero_ext()', '$usuario->getColonia()',
        '$usuario->getCodigo_postal()', '$usuario->getCiudad()',
        '$usuario->getMunicipio()', '$usuario->getEstado()',
        '$usuario->getPais()', '$usuario->getTipo()',
        '$usuario->getEstatus()')";

        $db = new Database();
        $db->actualizar($q);
        return $usuario;
    }
    function actualizarRegistro($usuario){
      $q = "UPDATE Usuario SET nombre='$usuario->getNombre()',
      apellidos='$usuario->getApellidos()', password='$usuario->getPassword()',
      telefono='$usuario->getTelefono()', calle='$usuario->getCalle()',
      numero_int='$usuario->getNumero_int()',
      numero_ext='$usuario->getNumero_ext()',
      colonia='$usuario->getColonia()',
      codigo_postal='$usuario->getCodigo_postal()',
      ciudad='$usuario->getCiudad()', municipio='$usuario->getMunicipio()',
      estado='$usuario->getEstado()', pais='$usuario->getPais()',
      tipo='$usuario->geTipo()', estatus='$usuario->getEstatus()'
      WHERE correo='$usuario->getCorreo()'";

      $db = new Database();
      return $db->actualizar($q);
    }
    function obtenerRegistro($correo){
      $q = "SELECT * FROM Usuario WHERE correo='$correo'";
      $db = new Database();
      $objetos = $db->seleccionar($q);
      $usuario = null;
      foreach($objetos as $objeto){
        $usuario = new Usuario($objeto->correo, $objeto->nombre,
        $objeto->apellidos, $objeto->password, $objeto->telefono,
        $objeto->calle, $objeto->numero_int, $objeto->numero_ext,
        $objeto->colonia, $objeto->codigo_postal, $objeto->ciudad,
        $objeto->municipio, $objeto->estado, $objeto->pais,
        $objeto->tipo, $objeto->estatus);
      }
      return $usuario;
    }
    function hacerLogin($correo, $password){
      $q = "SELECT * FROM Usuario WHERE correo='$correo' and password='$password'";
      $db = new Database();
      $objetos = $db->seleccionar($q);
      $usuario = null;
      foreach($objetos as $objeto){
        $usuario = new Usuario($objeto->correo, $objeto->nombre,
        $objeto->apellidos, $objeto->password, $objeto->telefono,
        $objeto->calle, $objeto->numero_int, $objeto->numero_ext,
        $objeto->colonia, $objeto->codigo_postal, $objeto->ciudad,
        $objeto->municipio, $objeto->estado, $objeto->pais,
        $objeto->tipo, $objeto->estatus);
      }
      return $usuario;
    }
    function obtenerRegistros(){
      $q = "SELECT * FROM Usuario";
      $db = new Database();
      $objetos = $db->seleccionar($q);
      $usuarios = array();
      foreach($objetos as $objeto){
        $usuario = new Usuario($objeto->correo, $objeto->nombre,
        $objeto->apellidos, $objeto->password, $objeto->telefono,
        $objeto->calle, $objeto->numero_int, $objeto->numero_ext,
        $objeto->colonia, $objeto->codigo_postal, $objeto->ciudad,
        $objeto->municipio, $objeto->estado, $objeto->pais,
        $objeto->tipo, $objeto->estatus);
        array_push($usuarios, $usuario);
      }
      return $usuarios;
    }
    function eliminarRegistro($correo){
      $q = "DELETE FROM Usuario WHERE correo='$correo'";
      $db = new Database();
      return $db->actualizar($q);
    }
  }
?>

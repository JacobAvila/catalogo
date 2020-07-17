<?php
 class DAOImagen{
   function crearRegistro(){
     $q = "INSERT INTO Imagen VALUES('$imagen->getId_imagen()',
     '$imagen->getArchivo_imagen()', '$imagen->getClave_producto()')";

     $db = new Database();
     $db->actualizar($q);
     return $imagen;
   }
   function actualizarRegistro($imagen){
    $q = "UPDATE Imagen SET id_imagen='$imagen->getId_imagen()',
    archivo_imagen='$imagen->getArchivo_imagen()',
    clave_producto='$imagen->getClave_producto()'";

    $db = new Database();
    return $db->actualizar($q);


   }
   function obtenerRegistro($imagen){
    $q = "SELECT * FROM Imagen WHERE imagen='$imagen'";
    $db = new Database();
    $objetos = $db->seleccionar($q);
    $imagen = null;
    foreach($objetos as $objeto){
      $imagen = new Imagen($objeto->id_imagen, $objeto->archivo_imagen,
      $objeto->clave_producto,);
    }
    return $imagen;

   }
   function obtenerRegistros($clave){
     $q = "SELECT * FROM Imagen WHERE clave_producto= '$clave'";
     $db = new Database();
     $objetos = $db->seleccionar($q);
     $imagenes = array();
     foreach($objetos as $objeto){
      $imagen = new Imagen($objeto->id_imagen, $objeto->archivo_imagen,
      $objeto->clave_producto,);

      array_push($imagenes, $imagen);
     }
     return $imagenes;
   }
   function eliminarRegistro($imagen){
     $q = "DELETE FROM Imagen WHERE imagen='$imagen'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

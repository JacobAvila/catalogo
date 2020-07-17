<?php
 class DAOCarrito{
   function crearRegistro($carrito){
     $q = "INSERT INTO Carrito VALUES('$carrito->getId_carrito()',
     '$carrito->getFecha()', '$carrito->getSubtotal()',
     '$carrito->getIva()', '$carrito->getTotal()')";

     $db = new Database();
     $db->actualizar($q);
     $carrito->setId_carrito($db->insertId());
     return $carrito;
   }
   function actualizarRegistro($carrito){
    $q = "UPDATE Carrito SET id_carrito='$carrito->getId_carrito()',
    fecha='$carrito->getFecha()', subtotal='$carrito->getSubtotal()',
    iva='$carrito->getIva()', total='$carrito->getTotal()')";

    $db = new Database();
    return $db->actualizar($q);

   }
   function obtenerRegistro($carrito){
    $q = "SELECT * FROM Carrito WHERE carrito='$carrito'";
    $db = new Database();
    $objeto = $db->seleccionar($q);
    $carrito = null;
    foreach($objetos as $objeto){
      $carrito = new Carrito($objeto->id_carrito, $objeto->fecha,
      $objeto->subtotal, $objeto->iva, $objeto->total,);
    }
    return $carrito;

   }
   function obtenerRegistros(){
     $q = "SELECT * FROM Carrito";
     $db = new Database();
     $objeto = $db->seleccionar($q);
     $carrito = array();
     foreach($objetos as $objeto){
      $carrito = new Carrito($objeto->id_carrito, $objeto->fecha,
      $objeto->subtotal, $objeto->iva, $objeto->total,);
     }
     return $carrito;
   }
   function eliminarRegistro($carrito){
     $q = "DELETE FROM Carrito WHERE carrito='$carrito'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

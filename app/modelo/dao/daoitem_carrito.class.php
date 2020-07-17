<?php
 class DAOItem_carrito{
   function crearRegistro(){
     $q = "INSERT INTO Item_carrito VALUES('$item_carrito->getId_item()',
     '$item_carrito->getId_Carrito)', '$item_carrito->getClave_producto()',
     '$item_carrito->getPrecio()', '$item_carrito->getCantidad()',
     '$item_carrito->getImporte()')";

     $db = new Database();
     $db->actualizar($q);
     return $item_carrito;
   }
   function actualizarRegistro($item_carrito){
    $q = "UPDATE Item_Carrito SET id_item='$item_carrito->getId_item()',
    id_carrito='$item_carrito->getId_carrito()', clave_producto='$item_carrito->getclave_producto()',
    precio='$item_carrito->getPrecio()', cantidad='$item_carrito->getCantidad()',
    importe='$item_carrito->getImporte()'";


    $db = new Database();
    return $db->actualizar($q);


   }
   function obtenerRegistro($item_carrito){
    $q = "SELECT * FROM Item_Carrito WHERE item_carrito='$item_carrito'";
    $db = new Database();
    $objeto = $db->seleccionar($q);
    $item_carrito = null;
    foreach($objetos as $objeto){
      $item_carrito = new Item_carrito ($objeto->id_item, $objeto->id_carrito,
      $objeto->clave_producto, $objeto->precio, $objeto->cantidad,
      $objeto->importe,);
    }
    return $item_carrito;

   }
   function obtenerRegistros(){
     $q = "SELECT * FROM Item_carrito";
     $db = new Database();
     $objeto = $db->seleccionar($q);
     $item_carrito = array();
     foreach($objetos as $objeto){
      $item_carrito = new Item_carrito ($objeto->id_item, $objeto->id_carrito,
      $objeto->clave_producto, $objeto->precio, $objeto->cantidad,
      $objeto->importe,);
     }
     return $item_carrito;
   }
   function eliminarRegistro($item_carrito){
     $q = "DELETE FROM Item_carrito WHERE item_carrito='$item_carrito'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

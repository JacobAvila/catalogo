<?php
 class DAOItem_pedido{
   function crearRegistro(){
     $q = "INSERT INTO Item_pedido VALUES('$item_pedido->getId_item()',
     '$item_pedido->getNo_pedido()', '$item_pedido->getClave_producto()',
     '$item_pedido->getPrecio()', '$item_pedido->getCantidad()',
     '$item_pedido->getImporte()')";

     $db = new Database();
     $db->actualizar($q);
     return $item_pedido;
   }
   function actualizarRegistro($item_pedido){
    $q = "UPDATE Item_pedido SET id_item='$item_pedido->getId_item()',
    no_pedido='$item_pedido->getNo_pedido()', clave_producto='$item_pedido->getClave_producto()',
    precio='$item_pedido->getPrecio()', cantidad='$item_pedido->getCantidad()',
    importe='$item_pedido->getImporte()'";


    $db = new Database();
    return $db->actualizar($q);


   }
   function obtenerRegistro($item_pedido){
    $q = "SELECT * FROM Item_pedido WHERE item_pedido='$item_pedido'";
    $db = new Database();
    $objeto = $db->seleccionar($q);
    $item_pedido = null;
    foreach($objeto as $objeto){
      $item_pedido = new Item_pedido($objeto->no_pedido, $objeto->clave_producto,
      $objeto->precio, $objeto->cantidad, $objeto->importe,);
    }
    return $item_pedido;

   }
   function obtenerRegistros(){
     $q = "SELECT * FROM Item_pedido";
     $db = new Database();
     $objeto = $db->seleccionar($q);
     $item_pedido = array();
     foreach($objetos as $objeto){
      $item_pedido = new Item_pedido($objeto->no_pedido, $objeto->clave_producto,
      $objeto->precio, $objeto->cantidad, $objeto->importe,);
     }
     return $item_pedido;
   }
   function eliminarRegistro($correo){
     $q = "DELETE FROM Item_pedido WHERE producto item_pedido='$item_pedido'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

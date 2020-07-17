<?php
 class DAOPedido{
   function crearRegistro(){
     $q = "INSERT INTO Pedido VALUES('$pedido->getNo_pedido()',
     '$pedido->getFecha()', '$pedido->getCorreo()',
     '$pedido->getSubtotal()', '$pedido->getIva()',
     '$pedido->getTotal()', '$pedido->getForma_pago()',
     '$pedido->getEstatus()')";

     $db = new Database();
     $db->actualizar($q);
     return $pedido;
   }
   function actualizarRegistro($pedido){
    $q = "UPDATE Pedido SET no_pedido='$pedido->getNo_pedido()',
    fecha='$pedido->getFecha()', correo='$pedido->getCorreo()',
    subtotal='$pedido->getSubtotal()', iva='$pedido->getIva()',
    total='$pedido->getTotal()', forma:_pago='$pedido->getForma_pago()',
    estatus='$pedido->getEstatus()'";

    $db = new Database();
    return $db->actualizar($q);


   }
   function obtenerRegistro($pedido){
    $q = "SELECT * FROM Pedido WHERE correo='$correo'";
    $db = new Database();
    $objeto = $db->seleccionar($q);
    $pedido = null;
    foreach($objetos as $objeto){
      $pedido = new Pedido($objeto->no_pedido, $objeto->fecha,
      $objeto->correo, $objeto->subtotal, $objeto->iva,
      $objeto->total, $objeto->forma_pago, $objeto->estatus,);
    }
    return $pedido;

   }
   function obtenerRegistros(){
     $q = "SELECT * FROM Pedido";
     $db = new Database();
     $objeto = $db->seleccionar($q);
     $pedido = array();
     foreach($objetos as $objeto){
      $pedido = new Pedido($objeto->no_pedido, $objeto->fecha,
      $objeto->correo, $objeto->subtotal, $objeto->iva,
      $objeto->total, $objeto->forma_pago, $objeto->estatus,);
       array_push($pedido, $pedido);
     }
     return $producto;
   }
   function eliminarRegistro($pedido){
     $q = "DELETE FROM Pedido WHERE pedido='$pedido'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

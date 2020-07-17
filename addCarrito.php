<?php
  $home = "";
  include($home."app/modelo/modelo.php");
  session_start();

  $carrito = (isset($_SESSION["carrito"]))?$_SESSION["carrito"]:null;
  if($carrito === null){
    $carrito = new Carrito(0, date("Y-m-d"), 0, 0, 0);
  }
  $clave = $_GET['clave'];
  $precio = $_GET['precio'];
  $cantidad = $_GET['cantidad'];

  $daoP = new DAOProducto();
  $producto = $daoP->obtenerRegistro($clave);

  $cant = count($carrito->getItems());
  $id = $cant + 1;
  $item = new Item_Carrito($id, 0, $clave, $producto->getNombre(), $precio, $cantidad, ($precio * $cantidad));
  $carrito->addItem($item);

  $_SESSION["carrito"] = $carrito;
  
  header("Location: detalles.php?clave=$clave");
?>

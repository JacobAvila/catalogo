<?php
 class DAOProducto{
   function crearRegistro(){
     $q = "INSERT INTO Producto VALUES('$producto->getClave()',
     '$producto->getNombre()', '$producto->getMarca()',
     '$producto->getDescripcion()', '$producto->getClave_categoria()',
     '$producto->getPrecio()', '$producto->getEstatus()')";

     $db = new Database();
     $db->actualizar($q);
     return $producto;
   }
   function actualizarRegistro($producto){
    $q = "UPDATE Producto SET clave='$producto->getClave()',
    nombre='$producto->getNombre()', marca='$producto->getMarca()',
    descripcion='$producto->getDescripcion()', telefono='$producto->getTelefono()()',
    calle='$producto->getCalle()', clave_categoria='$producto->getClave_categoria()',
    precio='$producto->getPrecio()', estatus='$producto->getEstatus()'";

    $db = new Database();
    return $db->actualizar($q);


   }
   function obtenerRegistro($clave){
    $q = "SELECT * FROM productocategoria WHERE clave='$clave'";
    $db = new Database();
    $objetos = $db->seleccionar($q);
    $producto = null;
    $usuario = null;
    foreach($objetos as $objeto){
      $producto = new Producto($objeto->clave, $objeto->nombre,
        $objeto->marca, $objeto->descripcion, $objeto->clave_categoria,
        $objeto->nombre_cat, $objeto->precio, $objeto->estatus);

      $daoI = new DAOImagen();
      $imagenes = $daoI->obtenerRegistros($clave);
      $producto->setImagenes($imagenes);
    }
    return $producto;

   }
   function obtenerRegistros(){
     $q = "SELECT * FROM productocategoria";
     $db = new Database();
     $objetos = $db->seleccionar($q);
     $productos = array();
     foreach($objetos as $objeto){
        $producto = new Producto($objeto->clave, $objeto->nombre,
        $objeto->marca, $objeto->descripcion, $objeto->clave_categoria,
        $objeto->nombre_cat, $objeto->precio, $objeto->estatus);
        $daoI = new DAOImagen();
        $imagenes = $daoI->obtenerRegistros($objeto->clave);
        $producto->setImagenes($imagenes);
        array_push($productos, $producto);
     }
     return $productos;
   }
   function registrosPorCategoria($clave_cat){
     $q = "SELECT * FROM productocategoria WHERE clave_categoria=$clave_cat";
     $db = new Database();
     $objetos = $db->seleccionar($q);
     $productos = array();
     foreach($objetos as $objeto){
        $producto = new Producto($objeto->clave, $objeto->nombre,
        $objeto->marca, $objeto->descripcion, $objeto->clave_categoria,
        $objeto->nombre_cat, $objeto->precio, $objeto->estatus);
        $daoI = new DAOImagen();
        $imagenes = $daoI->obtenerRegistros($objeto->clave);
        $producto->setImagenes($imagenes);
        array_push($productos, $producto);
     }
     return $productos;
   }
   function busqueda($texto){
     $q = "SELECT * FROM productocategoria WHERE nombre like '%$texto%' or nombre_cat like '%$texto%'";
     $db = new Database();
     $objetos = $db->seleccionar($q);
     $productos = array();
     foreach($objetos as $objeto){
        $producto = new Producto($objeto->clave, $objeto->nombre,
        $objeto->marca, $objeto->descripcion, $objeto->clave_categoria,
        $objeto->nombre_cat, $objeto->precio, $objeto->estatus);
        $daoI = new DAOImagen();
        $imagenes = $daoI->obtenerRegistros($objeto->clave);
        $producto->setImagenes($imagenes);
        array_push($productos, $producto);
     }
     return $productos;
   }
   function eliminarRegistro($producto){
     $q = "DELETE FROM Usuario WHERE producto='$producto'";
     $db = new Database();
     return $db->actualizar($q);
   }
 }
 ?>

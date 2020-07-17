<?php

class Producto{
    private $clave;
    private $nombre;
    private $marca;
    private $descripcion;
    private $clave_categoria;
    private $categoria;
    private $precio;
    private $estatus;
    private $imagenes;

    function __construct($clave, $nombre, $marca, $descripcion, $clave_categoria, $categoria, $precio, $estatus) {
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->descripcion = $descripcion;
        $this->clave_categoria = $clave_categoria;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->estatus = $estatus;
        $this->imagenes = array();
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getMarca() {
        return $this->marca;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getClave_categoria() {
        return $this->clave_categoria;
    }
    function getCategoria(){
      return $this->categoria;
    }
    function getPrecio() {
        return $this->precio;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setClave_categoria($clave_categoria) {
        $this->clave_categoria = $clave_categoria;
    }
    function setCategoria($categoria){
      $this->categoria = $categoria;
    }
    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function getImagenes(){
      return $this->imagenes;
    }
    function setImagenes($imagenes){
      $this->imagenes = $imagenes;
    }

}
?>

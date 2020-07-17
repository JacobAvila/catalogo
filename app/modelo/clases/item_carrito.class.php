<?php
class Item_Carrito{
    private $id_item;
    private $id_carrito;
    private $clave_producto;
    private $nombre_producto;
    private $precio;
    private $cantidad;
    private $importe;

    function __construct($id_item, $id_carrito, $clave_producto, $nombre_producto, $precio, $cantidad, $importe) {
        $this->id_item = $id_item;
        $this->id_carrito = $id_carrito;
        $this->clave_producto = $clave_producto;
        $this->nombre_producto = $nombre_producto;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->importe = $importe;
    }
    function getId_item() {
        return $this->id_item;
    }

    function getId_carrito() {
        return $this->id_carrito;
    }

    function getClave_producto() {
        return $this->clave_producto;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getImporte() {
        return $this->importe;
    }
    function getNombre_producto() {
        return $this->nombre_producto;
    }

    function setId_item($id_item) {
        $this->id_item = $id_item;
    }

    function setId_carrito($id_carrito) {
        $this->id_carrito = $id_carrito;
    }

    function setClave_producto($clave_producto) {
        $this->clave_producto = $clave_producto;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setImporte($importe) {
        $this->importe = $importe;
    }
    function setNombre_producto($nombre) {
        $this->nombre_producto = $nombre;
    }


}

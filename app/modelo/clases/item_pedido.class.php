<?php

class Item_Pedido{
    private $id_item;
    private $no_pedido;
    private $clave_producto;
    private $precio;
    private $cantidad;
    private $importe;
    
    function __construct($id_item, $no_pedido, $clave_producto, $precio, $cantidad, $importe) {
        $this->id_item = $id_item;
        $this->no_pedido = $no_pedido;
        $this->clave_producto = $clave_producto;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->importe = $importe;
    }
    
    function getId_item() {
        return $this->id_item;
    }

    function getNo_pedido() {
        return $this->no_pedido;
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

    function setId_item($id_item) {
        $this->id_item = $id_item;
    }

    function setNo_pedido($no_pedido) {
        $this->no_pedido = $no_pedido;
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



}
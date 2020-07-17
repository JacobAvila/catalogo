<?php

class Carrito{
    private $id_carrito;
    private $fecha;
    private $subtotal;
    private $iva;
    private $total;
    private $items;

    function __construct($id_carrito, $fecha, $subtotal, $iva, $total) {
        $this->id_carrito = $id_carrito;
        $this->fecha = $fecha;
        $this->subtotal = $subtotal;
        $this->iva = $iva;
        $this->total = $total;
        $this->items = array();
    }
    function getId_carrito() {
        return $this->id_carrito;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getSubtotal() {
        return $this->subtotal;
    }

    function getIva() {
        return $this->iva;
    }

    function getTotal() {
        return $this->total;
    }
    function getItems(){
      if($this->items === null){
        $this->items = array();
      }
      return $this->items;
    }
    function setItems($items){
      $this->items = $items;
    }
    function addItem($item){
      array_push($this->items, $item);
    }
    function setId_carrito($id_carrito) {
        $this->id_carrito = $id_carrito;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    function setIva($iva) {
        $this->iva = $iva;
    }

    function setTotal($total) {
        $this->total = $total;
    }


}

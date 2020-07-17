<?php

class Pedido{
    private $no_pedido;
    private $fecha;
    private $correo;
    private $subtotal;
    private $iva;
    private $total;
    private $forma_pago;
    private $estatus;
    
    function __construct($no_pedido, $fecha, $correo, $subtotal, $iva, $total, $forma_pago, $estatus) {
        $this->no_pedido = $no_pedido;
        $this->fecha = $fecha;
        $this->correo = $correo;
        $this->subtotal = $subtotal;
        $this->iva = $iva;
        $this->total = $total;
        $this->forma_pago = $forma_pago;
        $this->estatus = $estatus;
    }

    function getNo_pedido() {
        return $this->no_pedido;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getCorreo() {
        return $this->correo;
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

    function getForma_pago() {
        return $this->forma_pago;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function setNo_pedido($no_pedido) {
        $this->no_pedido = $no_pedido;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
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

    function setForma_pago($forma_pago) {
        $this->forma_pago = $forma_pago;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }




}
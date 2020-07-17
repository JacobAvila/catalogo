<?php

class Imagen{
    private $id_imagen;
    private $archivo_imagen;
    private $clave_producto;
    
    function __construct($id_imagen, $archivo_imagen, $clave_producto) {
        $this->id_imagen = $id_imagen;
        $this->archivo_imagen = $archivo_imagen;
        $this->clave_producto = $clave_producto;
    }
    function getId_imagen() {
        return $this->id_imagen;
    }

    function getArchivo_imagen() {
        return $this->archivo_imagen;
    }

    function getClave_producto() {
        return $this->clave_producto;
    }

    function setId_imagen($id_imagen) {
        $this->id_imagen = $id_imagen;
    }

    function setArchivo_imagen($archivo_imagen) {
        $this->archivo_imagen = $archivo_imagen;
    }

    function setClave_producto($clave_producto) {
        $this->clave_producto = $clave_producto;
    }


}
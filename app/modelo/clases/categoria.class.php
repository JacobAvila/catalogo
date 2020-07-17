<?php

class Categoria{
    private $clave;
    private $nombre;
    
    function __construct($clave, $nombre) {
        $this->clave = $clave;
        $this->nombre = $nombre;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
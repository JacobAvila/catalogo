<?php
class Usuario{
  private $correo;
  private $nombre;
  private $apellidos;
  private $password;
  private $telefono;
  private $calle;
  private $numero_int;
  private $numero_ext;
  private $colonia;
  private $codigo_postal;
  private $ciudad;
  private $municipio;
  private $estado;
  private $pais;
  private $tipo;
  private $estatus;

  function __construct($correo,
                        $nombre,
                        $apellidos,
                        $password,
                        $telefono,
                        $calle,
                        $numero_int,
                        $numero_ext,
                        $colonia,
                        $codigo_postal,
                        $ciudad,
                        $municipio,
                        $estado,
                        $pais,
                        $tipo,
                        $estatus){
    $this->correo = $correo;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->password = $password;
    $this->telefono = $telefono;
    $this->calle = $calle;
    $this->num_int = $num_int;
    $this->num_ext = $num_ext;
    $this->colonia = $colonia;
    $this->codigo_postal = $codigo_postal;
    $this->ciudad = $ciudad;
    $this->municipio = $municipio;
    $this->estado = $estado;
    $this->pais = $pais;
    $this->tipo = $tipo;
    $this->estatus = $estatus;
  }

  public function getCorreo(){
    return $this->correo;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getApellidos(){
    return $this->apellidos;
  }
  public function setApellidos($apellidos){
    $this->apellidos = $apellidos;
  }
  public function getPassword(){
    return $this->password;
  }
  public function setPassword($password){
    $this->password = $password;
  }
  public function getTelefono(){
    return $this->telefono;
  }
  public function setTelefono($telefono){
    $this->telefono = $telefono;
  }
  public function getCalle(){
    return $this->calle;
  }
  public function setCalle($calle){
    $this->calle = $calle;
  }
  public function getNumero_int(){
    return $this->numero_int;
  }
  public function setNumero_int($numero_int){
    $this->numero_int = $numero_int;
  }
  public function getNumero_ext(){
    return $this->numero_ext;
  }
  public function setNumero_ext($numero_ext){
    $this->numero_ext = $numero_ext;
  }
  public function getColonia(){
    return $this->colonia;
  }
  public function setColonia($colonia){
    $this->colonia = $colonia;
  }
  public function getCodigo_postal(){
    return $this->codigo_postal;
  }
  public function setCodigo_postal($codigo_postal){
    $this->codigo_postal = $codigo_postal;
  }
  public function getCiudad(){
    return $this->ciudad;
  }
  public function setCiudad($ciudad){
    $this->ciudad = $ciudad;
  }
  public function getMunicipio(){
    return $this->municipio;
  }
  public function setMunicipio($municipio){
    $this->municipio = $municipio;
  }
  public function getEstado(){
    return $this->estado;
  }
  public function setEstado($estado){
    $this->estado = $estado;
  }
  public function getPais(){
    return $this->pais;
  }
  public function setPais($pais){
    $this->pais = $pais;
  }
  public function getTipo(){
    return $this->tipo;
  }
  public function setTipo($tipo){
    $this->tipo = $tipo;
  }
  public function getEstatus(){
    return $this->estatus;
  }
  public function setEstatus($estatus){
    $this->estatus = $estatus;
  }
}
 ?>

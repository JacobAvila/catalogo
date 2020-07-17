<?php
  session_start();
  $carrito = (isset($_SESSION["carrito"]))?$_SESSION["carrito"]:null;
  $cantProd = 0;
  if($carrito !== null){
    $cantProd = count($carrito->getItems());
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<img class="navbar-brand" src="<?php echo $home; ?>img/logo_catalogo_prod.png">
<button class="navbar-toggler" type="button" data-toggle="collapse" data_target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div id="titulo">
  <h2 class="text-white">Catálogo de Productos</h2>
</div>
<div class="collapse navbar-collapse" id="navbarMenu">
  <ul class="navbar-nav mr-auto ml-5">
    <li class="nav-item">
      <a class="nav-link text-white" href="<?php echo $home."." ?>">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">Quienes somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="#">Contáctanos</a>
    </li>
  </ul>
  <div class="mr-5">
    <a href="#" class="text-white">Login</a>
  </div>
  <a href="carrito.php">
    <img src="<?php echo $home; ?>img/shopping.png">
    <span class="badge badge-warning">
      <?php echo ($cantProd > 0)?$cantProd:'' ?>
    </span>
  </a>
</div>
</nav>
<div class="row my-2 my-lg-3">
  <div class="col-9 pl-5">
    Catálogo de productos con los mejores precios del mercado
  </div>
  <form class="form-inline col-3">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar" id="textoBus">
    <button class="btn btn-secondary my-2 my-sm-0" type="submit" onClick="buscarProducto(event)">
      Buscar
    </button>
  </form>
</div>

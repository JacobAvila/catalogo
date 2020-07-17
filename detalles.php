<!DOCTYPE html>
<?php
  $home = "";
  include("app/modelo/modelo.php");

  $clave = $_GET['clave'];
  $daoP = new DAOProducto();
  $producto = $daoP->obtenerRegistro($clave);
  $daoC = new DAOCategoria();
  $categorias = $daoC->obtenerRegistros();
 ?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <title><?php echo $producto->getNombre(); ?></title>
  <script src="js/imagenes.js"></script>
</head>

<body>
<div id="main">
  <?php include($home."app/includes/header.php"); ?>
  <div class="row ml-2">
    <div class="col-2">
      <div class="card">
        <div class="card-header text-center">
          <h5>Categorias</h5>
        </div>
        <?php foreach($categorias as $categoria){ ?>
          <div class="card-body list-group list-group-flush pl-3">
            <a href="#" class="card-link"><?php echo $categoria->getNombre(); ?></a>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="col-9 row">
      <div class="col-4">
        <div class="border">
          <?php
            $imagenes = $producto->getImagenes();
            $imagen = $imagenes[0];
            $actual = $home.'img/productos/'.$producto->getClave().'/'.$imagen->getArchivo_imagen();
          ?>
          <img src="<?php echo $actual; ?>" class="img-fluid col-12" id="imagenGrande">
        </div>
        <div class="row">
          <?php foreach($imagenes as $img){
              $actual = $home.'img/productos/'.$producto->getClave().'/'.$img->getArchivo_imagen();
          ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3" onmouseover="sobreImagen('<?php echo $actual; ?>')">
              <img src="<?php echo $actual; ?>" class="img-fluid img-thumbnail">
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="col-8">
        <h2><?php echo $producto->getClave()." ".$producto->getNombre(); ?></h2>
        <p>
          <?php echo $producto->getDescripcion(); ?>
        </p>
        <p>
          <strong>Precio: </strong>$<?php echo number_format($producto->getPrecio(), 2); ?>
        </p>
        <div>
          <div class="row">
            <div class="col-6">
              <form class="form-inline">
                <label class="my-1 mr-4" for="cantidad">Agregar</label>
                <input type="number" id="cantidad" class="form-control mr-3 col-3" value="1">
                <button type="button" class="btn btn-danger" onClick="agregarCarrito(event, '<?php echo $producto->getClave(); ?>', '<?php echo $producto->getPrecio(); ?>', document.getElementById('cantidad').value)">
                  <img src="img/shopping.png" width="20"> al Carrito
                </button>
              </form>
            </div>
            <div class="col-5 text-right">
              <a href=".">Regresar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

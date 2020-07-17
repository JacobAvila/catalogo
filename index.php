<!DOCTYPE html>
<?php
  $home = "";
  include("app/modelo/modelo.php");
  $daoP = new DAOProducto();
  $clave_cat = isset($_GET['clave_cat'])?$_GET['clave_cat']:'';
  $texto = isset($_GET['texto'])?$_GET['texto']:'';
  if($clave_cat === '' && $texto === ''){
    $productos = $daoP->obtenerRegistros();
  }else if($clave_cat !== '' && $texto === ''){
    $productos = $daoP->registrosPorCategoria($clave_cat);
  }else if($clave_cat === '' && $texto !== ''){
    $productos = $daoP->busqueda($texto);
  }
  $daoC = new DAOCategoria();
  $categorias = $daoC->obtenerRegistros();
 ?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <title>Catálogo</title>
  <script src="js/inicio.js"></script>
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
            <a href=".?clave_cat=<?php echo $categoria->getClave(); ?>" class="card-link"><?php echo $categoria->getNombre(); ?></a>
        </div>
        <?php } ?>
      </div>
    </div>
    <div class="col-9 row">
      <?php foreach($productos as $prod){ ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card">
            <?php
              $imagenes = $prod->getImagenes();
              $imagen = $imagenes[0];
            ?>
            <a href="detalles.php?clave=<?php echo $prod->getClave(); ?>">
              <img src="<?php echo $home.'img/productos/'.$prod->getClave().'/'.$imagen->getArchivo_imagen();?>" class="card-img-top">
            </a>
            <div class="card-body">
              <p class="card-text mb-1">
                <Strong>
                  <?php echo $prod->getClave(); ?> <?php echo $prod->getNombre(); ?>
                </strong>
              </p>
              <p class="card-text mb-1"><?php echo $prod->getMarca(); ?></p>
              <p class="card-text mb-1">
                <strong>Categoría: </strong>
                <?php echo $prod->getCategoria(); ?>
              </p>
              <p class="card-text">
                <strong>Precio: </strong>
                $<?php echo number_format($prod->getPrecio(), 2); ?>
              </p>
              <center>
                <a href="detalles.php?clave=<?php echo $prod->getClave(); ?>" class="btn btn-warning">
                  Ver Detalles
                </a>
              </center>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</body>
</html>

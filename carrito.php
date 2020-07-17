<?php
$home = '';
include($home.'app/modelo/modelo.php');
$subtotal = 0;
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
    <div class="col-9 row">
      <h1>
        Mi Compra
        <span class="col text-right">
          <?php echo date('d/m/Y',strtotime($carrito->getFecha())); ?>
        </span>
      </h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Clave</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Importe</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($carrito->getItems() as $item){
                  $subtotal += $item->getImporte();
          ?>
          <tr>
            <td><?php echo $item->getClave_producto(); ?></td>
            <td><?php echo $item->getNombre_producto(); ?></td>
            <td class="text-right">$<?php echo number_format($item->getPrecio(), 2); ?></td>
            <td class="text-center">
              <input type="number" value="<?php echo $item->getCantidad(); ?>" class="form-control col-sm-4" />
            </td>
            <td class="text-right">$<?php echo number_format($item->getImporte(), 2); ?></td>
            <td><img src="img/trash.svg"/>Eliminar</td>
          </tr>
          <?php }
            $carrito->setSubtotal($subtotal);
            $carrito->setIva($subtotal*.16);
            $carrito->setTotal($subtotal + $carrito->getIva());
          ?>
        </tbody>
        <tfooter>
          <tr class="text-right table-borderless">
            <td colspan="4">Subtotal</td>
            <td><?php echo number_format($carrito->getSubtotal(), 2); ?></td>
            <td></td>
          </tr>
          <tr class="text-right table-borderless">
            <td colspan="4">IVA</td>
            <td><?php echo number_format($carrito->getIva(), 2); ?></td>
            <td></td>
          </tr>
          <tr class="text-right table-borderless">
            <td colspan="4">Total</td>
            <td><?php echo number_format($carrito->getTotal(), 2); ?></td>
            <td></td>
          </tr>
        </tfooter>
      </table>
    </div>
  </div>
</div>
</body>
</html>

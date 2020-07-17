function sobreImagen(imagen){
  document.getElementById("imagenGrande").src=imagen;
}

function agregarCarrito(event, clave, precio, cantidad){
  event.preventDefault();
  event.stopPropagation();
  document.location.href="addCarrito.php?clave=" + clave + "&precio=" + precio + "&cantidad=" + cantidad;
}
